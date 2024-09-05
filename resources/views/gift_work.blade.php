@extends('layouts.app')

@section('title', $title)
@section('meta_tags')
<meta name="description" content="{{($description)}}">
<meta name="keywords" content="{{($keyword)}}">
@endsection
@section('other_tags')
{!! $others !!}
@endsection

@section('css')
    <style>
        .page-header .breadcrumb span::before {
            content: "" !important;
        }

        /*  */
        /* Hide scrollbar for Chrome, Safari and Opera */
        .modal-xl::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .modal-xl {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
@endsection

@section('content')

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade rouneded" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" style="height: 94vh;overflow-y: auto;">
            <!-- Change modal-dialog class here -->
            <div class="modal-content">
                <div class="modal-header w-100 bg-light" style="position: sticky;top: 0;z-index: 99;">
                    <img src="assets/images/logo.png" width="100px" alt="">
                    <!-- <h1 class="modal-title fs-5 text-center w-100 fs-4 fw-bold" id="exampleModalLabel">Customize Your Free Gift</h1> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your modal body content here -->
                    <!-- <p>Customize Your Neckness</p> -->
                    <div class="row">
                        <div class="col-lg-10  p-0">
                            <img id="mainImage" src="./assets/images/charms/2.png" width="95%" alt="">
                        </div>
                        <div class="col-lg-2">
                            <style>
                                .btn-group-vertical input[type="radio"] {
                                    width: 30px;
                                    height: 30px;
                                }

                                .btn-group-vertical input[type="radio"]+label img {
                                    width: 120px;
                                    height: 120px;
                                }
                            </style>

                            <div class="btn-group-vertical w-100 border text-center rounded" role="group"
                                aria-label="Charms">
                                <input type="radio" id="charm1" name="charm" value="1" hidden checked>
                                <label for="charm1" class="w-100">
                                    <img src="./assets/images/charms/1.png" class="p-2" alt="">
                                </label>

                                <input type="radio" id="charm2" name="charm" value="2" hidden>
                                <label for="charm2" class="w-100">
                                    <img src="./assets/images/charms/4.png" class="p-2" alt="">
                                </label>

                                <input type="radio" id="charm3" name="charm" value="3" hidden>
                                <label for="charm3" class="w-100">
                                    <img src="./assets/images/charms/6.png" class="p-2" alt="">
                                </label>

                                <input type="radio" id="charm4" name="charm" value="4" hidden>
                                <label for="charm4" class="w-100">
                                    <img src="./assets/images/charms/8.png" class="p-2" alt="">
                                </label>

                                <input type="radio" id="charm5" name="charm" value="5" hidden>
                                <label for="charm5" class="w-100">
                                    <img src="./assets/images/charms/10.png" class="p-2" alt="">
                                </label>

                                <input type="radio" id="charm6" name="charm" value="6" hidden>
                                <label for="charm6" class="w-100">
                                    <img src="./assets/images/charms/11.png" class="p-2" alt="">
                                </label>
                                <input type="radio" id="charm7" name="charm" value="7" hidden checked>
                                <label for="charm7" class="w-100">
                                    <img src="./assets/images/charms/13.png" class="p-2" alt="">
                                </label>

                                <input type="radio" id="charm8" name="charm" value="8" hidden>
                                <label for="charm8" class="w-100">
                                    <img src="./assets/images/charms/16.png" class="p-2" alt="">
                                </label>

                                <input type="radio" id="charm9" name="charm" value="9" hidden>
                                <label for="charm9" class="w-100">
                                    <img src="./assets/images/charms/18.png" class="p-2" alt="">
                                </label>

                                <input type="radio" id="charm10" name="charm" value="10" hidden>
                                <label for="charm10" class="w-100">
                                    <img src="./assets/images/charms/20.png" class="p-2" alt="">
                                </label>

                                <input type="radio" id="charm11" name="charm" value="11" hidden>
                                <label for="charm11" class="w-100">
                                    <img src="./assets/images/charms/21.png" class="p-2" alt="">
                                </label>

                                <input type="radio" id="charm12" name="charm" value="12" hidden>
                                <label for="charm12" class="w-100">
                                    <img src="./assets/images/charms/24.png" class="p-2" alt="">
                                </label>

                                <input type="radio" id="charm13" name="charm" value="13" hidden>
                                <label for="charm13" class="w-100">
                                    <img src="./assets/images/charms/26.png" class="p-2" alt="">
                                </label>

                                <input type="radio" id="charm14" name="charm" value="14" hidden>
                                <label for="charm14" class="w-100">
                                    <img src="./assets/images/charms/28.png" class="p-2" alt="">
                                </label>

                                <input type="radio" id="charm15" name="charm" value="15" hidden>
                                <label for="charm15" class="w-100">
                                    <img src="./assets/images/charms/29.png" class="p-2" alt="">
                                </label>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <script>
                // JavaScript for handling radio button change event
                document.addEventListener("DOMContentLoaded", function () {
                    var radioButtons = document.querySelectorAll('input[type=radio][name=charm]');
                    radioButtons.forEach(function (radio) {
                        radio.addEventListener('change', function () {
                            if (this.value == '1') {
                                document.getElementById('mainImage').src = './assets/images/charms/2.png';
                            } else if (this.value == '2') {
                                document.getElementById('mainImage').src = './assets/images/charms/3.png';
                            } else if (this.value == '3') {
                                document.getElementById('mainImage').src = './assets/images/charms/5.png';
                            } else if (this.value == '4') {
                                document.getElementById('mainImage').src = './assets/images/charms/7.png';
                            } else if (this.value == '5') {
                                document.getElementById('mainImage').src = './assets/images/charms/9.png';
                            } else if (this.value == '6') {
                                document.getElementById('mainImage').src = './assets/images/charms/12.png';
                            } else if (this.value == '7') {
                                document.getElementById('mainImage').src = './assets/images/charms/14.png';
                            } else if (this.value == '8') {
                                document.getElementById('mainImage').src = './assets/images/charms/15.png';
                            } else if (this.value == '9') {
                                document.getElementById('mainImage').src = './assets/images/charms/17.png';
                            } else if (this.value == '10') {
                                document.getElementById('mainImage').src = './assets/images/charms/19.png';
                            } else if (this.value == '11') {
                                document.getElementById('mainImage').src = './assets/images/charms/22.png';
                            } else if (this.value == '12') {
                                document.getElementById('mainImage').src = './assets/images/charms/23.png';
                            } else if (this.value == '13') {
                                document.getElementById('mainImage').src = './assets/images/charms/25.png';
                            } else if (this.value == '14') {
                                document.getElementById('mainImage').src = './assets/images/charms/27.png';
                            } else if (this.value == '15') {
                                document.getElementById('mainImage').src = './assets/images/charms/30.png';
                            }

                            // Add more else if conditions for other radio button values if needed
                        });
                    });
                });
            </script>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" style="background-color: black;"
                    data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-dark" style="background-color: black;">Save changes</button>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('js')
    <!-- owl carousel js cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        $(document).ready(function () {
            $('.testi_slider_wrapper_1 .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 6000,
                responsive: {
                    0: {
                        items: 3
                    },
                    600: {
                        items: 6
                    },
                    1000: {
                        items: 10
                    }
                }
            })
        })
    </script>
    <!--  -->

    <!-- Should be add in Every Page -->
    <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function () {
            loader.style.display = "none";
        })
    </script>
    <script>
        window.addEventListener("load", () => {
            // Retrieve all help sections
            const sections = Array.from(document.querySelectorAll("section[id]"));

            // Once a scrolling event is detected, iterate all elements
            // whose visibility changed and highlight their navigation entry
            const scrollHandler = entries =>
                entries.forEach(entry => {
                    const section = entry.target;
                    const sectionId = section.id;
                    const sectionLink = document.querySelector(`a[href="#${sectionId}"]`);

                    if (entry.intersectionRatio > 0) {
                        section.classList.add("visible");
                        sectionLink.classList.add("visible");
                    } else {
                        section.classList.remove("visible");
                        sectionLink.classList.remove("visible");
                    }
                });

            // Creates a new scroll observer
            const observer = new IntersectionObserver(scrollHandler);

            //noinspection JSCheckFunctionSignatures
            sections.forEach(section => observer.observe(section));
        });

    </script>
@endsection
