@extends('layouts.app')

@push('styles')

    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

    <style>
        #map {
            width: 100%;
            height: 100vh;
        }

        #results {
            overflow-y: scroll;
        }
    </style>

@endpush

@section('content')

    <div class="container-fluid g-0 p-0 m-0">
        <div class="row g-0">

            <!-- sidebar results -->
            <div class="col-3 position-relative">
                <div class="card">
                    <!-- search results spinner -->
                    <div class="d-none position-absolute top-50 start-50 translate-middle" id="results-spinner">
                        <div class="spinner-border text-danger" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <!-- end search results spinner -->

                    <!-- search form -->
                    <div class="card-header" id="results-header">
                        <h3 class="text-center">Buscador de comercios</h3>

                        <!-- how many radius on km -->
                        <div class="input-group mb-3">
                            <span class="input-group-text">¿Cuántos kilómetros alrededor?</span>
                            <input
                                type="number"
                                id="radius"
                                class="form-control"
                                placeholder="Radio en km"
                                aria-label="Radio en km"
                                value="5"
                                min="1"
                                max="1000"
                            />
                            <span class="input-group-text">km</span>
                        </div>
                        <!-- end how many radius on km -->

                        <!-- input search -->
                        <div class="input-group mb-3">
                            <input
                                type="text"
                                id="search"
                                class="form-control"
                                placeholder="Buscar comercio"
                                aria-label="Buscar comercio"
                                autofocus
                                autocomplete="off"
                            />
                        </div>
                        <!-- end input search -->

                        <!-- checkboxes with commerce types -->
                        <div class="text-center mx-2 small" id="commerce-types">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="hairdresser" value="hairdresser" />
                                <label class="form-check-label" for="hairdresser">Peluquerías</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="restaurant" value="restaurant" />
                                <label class="form-check-label" for="restaurant">Restaurantes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="bar" value="bar" />
                                <label class="form-check-label" for="bar">Bares</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="supermarket" value="supermarket" />
                                <label class="form-check-label" for="supermarket">Supermercados</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="ice-cream" value="ice-cream" />
                                <label class="form-check-label" for="ice-cream">Heladerías</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="sports" value="sports" />
                                <label class="form-check-label" for="sports">Deportes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="pharmacy" value="pharmacy" />
                                <label class="form-check-label" for="pharmacy">Farmacias</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="butcher" value="butcher" />
                                <label class="form-check-label" for="butcher">Carnicerías</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="other" value="other" />
                                <label class="form-check-label" for="other">Otros</label>
                            </div>
                        </div>
                        <!-- end checkboxes with commerce types -->
                    </div>
                    <!-- end search form -->

                    <!-- search results -->
                    <div class="card-body g-0 p-0 m-0">
                        <div id="summary" class="bg-warning text-white text-center py-2 mb-2">
                            0 resultados
                        </div>
                        <div id="results" class="text-center pt-1 pb-3">
                            Escribe una dirección para buscar comercios
                        </div>
                    </div>
                    <!-- end search results -->

                </div>
            </div>
            <!-- end sidebar results -->

            <!-- Map -->
            <div class="col-9 position-relative">
                <!-- map spinner -->
                <div id="map-spinner" class="d-none position-absolute top-50 start-50 spinner-border text-danger" style="z-index: 1000" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <!-- end map spinner -->
                <!-- map element -->
                <div id="map">

                </div>
                <!-- end map element -->
            </div>
            <!-- END map-->

    </div>

@endsection

@push('scripts')

    <!-- Leaflet -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // icon classes for each commerce type
            const icons = {
                'hairdresser': 'fa-solid fa-cut',
                'restaurant': 'fa-solid fa-utensils',
                'bar': 'fas fa-glass-martini-alt',
                'supermarket': 'fa-solid fa-shopping-cart',
                'ice-cream': 'fa-solid fa-ice-cream',
                'sports': 'fa-solid fa-basketball-ball',
                'pharmacy': 'fa-solid fa-prescription-bottle-alt',
                'butcher': 'fa-solid fa-drumstick-bite',
                'other': 'fa-solid fa-store',
            };

            // aliases
            const $ = el => document.querySelector(el);
            const $$ = el => document.querySelectorAll(el);
            const $c = el => document.createElement(el);

            // constantes
            const searchUrl = '{{ route('commerce.search') }}';
            const initialLat = 41.068787;
            const initialLng = 1.108795;
            const initialZoom = 13;

            const map = L.map('map').setView([initialLat, initialLng], initialZoom);

            // init the map
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // elementos
            const $map = $('#map');
            const $search = $('#search');
            const $results = $('#results');
            const $summary = $('#summary');
            const $radius = $('#radius');
            const $commerceTypes = $$('input[type="checkbox"]');
            const $resultsHeader = $('#results-header');

            // #results height equals to map height
            $results.style.height = $map.offsetHeight - $resultsHeader.offsetHeight - $summary.offsetHeight - 10+ 'px';

            let timeout = null;

            const searchWithTimeout = ms => {
                clearTimeout(timeout);
                timeout = setTimeout(loadData, ms);
            }

            // event listeners
            // make search on types change
            $commerceTypes.forEach($type => {
                $type.addEventListener('change', () => {
                    searchWithTimeout(100);
                });
            });

            // map search on search by address
            $search.addEventListener('keyup', () => {
                searchWithTimeout(1000);
            });

            // map search on radius change
            $radius.addEventListener('change', () => {
                searchWithTimeout(500);
            });



            // helper functions
            // clear results data
            const clearResults = () => {
                $results.innerHTML = '';
                $summary.innerHTML = '';
            }

            //clear map markers
            const clearMarkers = () => {
                map.eachLayer(layer => {
                    if (layer instanceof L.Marker) {
                        layer.remove();
                    }
                });
            }

            // close all popups
            const closePopups = () => {
                map.eachLayer(layer => {
                    if (layer instanceof L.Marker) {
                        layer.closePopup();
                    }
                });
            }

            // display spinner
            const displaySpinner = id => {
                const $spinner = $(id);
                $spinner.classList.remove('d-none');
                $spinner.style.zIndex = '1000';
            }

            // hide spinner
            const hideSpinner = id => {
                const $spinner = $(id);
                $spinner.classList.add('d-none');
            }

            // add market to map
            const addMarker = commerce => {
                const marker = L.marker([commerce.lat, commerce.lng]);

                // custom id for open on click sidebar item
                marker._leaflet_id = commerce.id;

                const span = $c('span');
                span.classList.add('fa-stack', 'fa-1x');

                const icon = $c('i');
                icon.classList.add('fas', 'fa-circle', 'fa-stack-2x');

                const icon2 = $c('i');
                icon2.classList.add('fas', ...icons[commerce.type].split(' '), 'fa-stack-1x', 'fa-inverse');

                span.appendChild(icon);
                span.appendChild(icon2);

                const divIcon = L.divIcon({
                    className: 'fa-stack fa-1x',
                    html: span.outerHTML,
                    iconSize: [20, 20],
                    iconAnchor: [15, 10],
                });

                marker.setIcon(divIcon);

                const title = $c('h5');
                title.textContent = commerce.name;

                const address = $c('p');
                address.textContent = commerce.address;

                const phone = $c('p');
                phone.textContent = commerce.phone;

                const popup = L.popup({ // propiedades opconales, ver documentacion
                    closeButton: false,
                    autoClose: false,
                    closeOnEscapeKey: false,
                    closeOnClick: false,
                    className: 'popup',
                }).setContent(`${title.outerHTML}${address.outerHTML}${phone.outerHTML}`);

                marker.bindPopup(popup);

                marker.on('click', () => {
                    closePopups();
                    marker.openPopup();
                });

                return marker;

            }

            //load data
            const loadData = () => {
                displaySpinner('#results-spinner');
                displaySpinner('#map-spinner');

                clearMarkers();
                clearResults();

                const address = $search.value;
                const radius = $radius.value;
                const $selectedTypes = $$('input[type="checkbox"]:checked');
                const types = Array.from($selectedTypes).map($type => $type.value).join(','); // los juntamos con comas

                L.Control.Geocoder.nominatim().geocode(address, function(results){
                    if(!results.length){
                        $results.innerHTML = 'No se han encontrado resultados';
                        $summary.innerHTML = '0 resultados';
                        hideSpinner('#results-spinner');
                        hideSpinner('#map-spinner');
                        return;
                    }

                    // get lat and lng
                    const lat = results[0].center.lat;
                    const lng = results[0].center.lng;

                    // prepare url
                    const url = `${searchUrl}?lat=${lat}&lng=${lng}&radius=${radius}&types=${types}`;

                    // make ajax request to search url
                    fetch(url, {
                        method: 'GET',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                        }
                    })
                    .then(response => response.json())
                        .then(data => {

                            if(!data.length){
                                $results.innerHTML = 'No se han encontrado resultados';
                                $summary.innerHTML = '0 resultados';
                                map.setView([lat, lng], initialZoom);
                                return;
                            }

                            $summary.innerHTML = `${data.length} resultados`;
                            $results.innerHTML = '';

                            // añadir markers
                            const markers = L.featureGroup();

                            const group = $c('div');
                            group.classList.add('list-group');
                            data.forEach(commerce => {
                                const item = $c('div');
                                item.classList.add('list-group-item', 'list-group-item-action', 'm-0', 'p-0');

                                const marker = addMarker(commerce);
                                markers.addLayer(marker);

                                const titleContainer = $c('div');
                                titleContainer.classList.add('d-flex', 'w-100', 'justify-content-between', 'bg-light', 'rounded', 'p-2', 'mb-2');

                                const icon = $c('i');
                                icon.classList.add(...icons[commerce.type].split(' '), 'me-2');

                                const title = $c('h5');
                                title.classList.add('mb-1');
                                title.innerText = commerce.name;
                                title.prepend(icon);
                                titleContainer.appendChild(title);

                                const distance = $c('small');
                                distance.innerText = `${commerce.distance.toFixed(2)} km`;
                                titleContainer.appendChild(distance);

                                const address = $c('p');
                                address.classList.add('mb-1');
                                address.innerText = commerce.address;

                                const phone = $c('small');
                                phone.innerText = commerce.phone;

                                item.appendChild(titleContainer);
                                item.appendChild(address);
                                item.appendChild(phone);
                                item.setAttribute('role', 'button'); // hacer que se vea como un botón clickable

                                item.addEventListener('click', () => {
                                    closePopups();
                                    map.setView([commerce.lat, commerce.lng], 20);
                                    marker.openPopup();
                                });

                                group.appendChild(item);
                            })

                            map.setView([lat, lng], initialZoom); // lo añado yo para que si encuentra tambien me lleve al sitio
                            $results.appendChild(group);

                            markers.addTo(map);
                            map.fitBounds(markers.getBounds());

                        })
                        .catch(error => {
                            $results.innerHTML = 'Ha ocurrido un error';
                            $summary.innerHTML = '0 resultados';
                            console.error(error);
                        })
                        .finally(() => {
                            hideSpinner('#results-spinner');
                            hideSpinner('#map-spinner');
                        });
                });
            }

        });
    </script>

@endpush
