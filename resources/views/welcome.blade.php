<x-layout>
    <main class="custom-margin">

        <div class="container-fluid d-flex align-items-center justify-content-center">
            <div class="row d-flex justify-content-center">

                <div class=" col-10 col-md-4 custom-height custom-shadow custom-box">
                    <div class="container">
                        <div class="row">
                            <div class="d-flex justify-content-start align-items-center my-3">
                                <i class="fa-solid fa-sliders text-accent-color fa-1x p-0"></i>
                                <p class="h6 p-0 m-0 ms-2">Configuration</p>
                            </div>
                            <div>
                                <p class=" mt-3 custom-p-text">TAX JURISDICITON</p>
                                <x-dropdown :countries="$countries" />
                            </div>
                            <div>
                                <p class=" mt-3 custom-p-text">EMPLOYMENT TYPE</p>
                                <x-dropdown />
                            </div>

                            <div>
                                <p class=" mt-3 custom-p-text">GROSS ANNUAL INCOME</p>
                                <input type="number" class="custom-text-input" placeholder="0.00€" id="grossincome">
                            </div>

                            <div class="d-flex justify-content-center align-items-center mt-4 pb-4">
                                <button class="btn btn-primary custom-button">Calculate</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-10 col-md-6 custom-height border-custom bg-tertiary-color custom-shadow">
                    <div class="container">

                        <div class="row">
                            <p class="mt-3 custom-p-text-2 text-accent-color">ESTIMATED NET TOTAL</p>
                            <div class="d-flex justify-content-start align-items-center">
                                <p class="h1 fw-bolder custom-fs2">0.00€</p>
                                <p class="custom-p-text mt-4 mx-2">/year</p>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-left">
                            <div class="ms-2 col-6 my-2 bg-dark-color p-3 rounded-3 shadow-sm">
                                <p class="custom-p-text">Total gross income</p>
                                <p class="h2">0.00€</p>
                            </div>

                            <div class=" mx-4 col-5 my-2 bg-dark-color p-3 rounded-3 shadow-sm">
                                <p class="custom-p-text">Income tax</p>
                                <p class="h2">0.00€</p>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-start">
                            <div class="ms-2 col-6 my-2 bg-dark-color p-3 rounded-3 shadow-sm">
                                <p class="custom-p-text">Social security</p>
                                <p class="h2">0.00€</p>
                            </div>

                            <div class=" mx-4 col-5 my-2 bg-dark-color p-3 rounded-3 shadow-sm">
                                <p class="custom-p-text">Local tax</p>
                                <p class="h2">0.00€</p>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
        </div>

        </div>
        </div>
    </main>
</x-layout>