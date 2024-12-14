<x-app-layout>

    @livewire('dashboard')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header bg-transparent">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <h6 class="mb-0 fw-bold">Sales Overview</h6>
                        </div>
                        <div class="dropdown ms-auto">
                            <button
                                type="button"
                                class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                data-bs-toggle="dropdown">
                                <i class="bi bi-three-dots fs-4"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="javascript:;">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="chart1"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header bg-transparent">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <h6 class="mb-0 fw-bold">Statistic</h6>
                            </div>
                            <div class="dropdown ms-auto">
                                <button
                                    type="button"
                                    class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                    data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots fs-4"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">Action</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="chart2"></div>
                        </div>
                        <ul class="list-group list-group-flush mb-0">
                            <li
                                class="list-group-item border-top d-flex justify-content-between align-items-center bg-transparent">Mobile<span class="badge bg-success rounded-pill">25%</span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Desktop<span class="badge bg-primary rounded-pill">65%</span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Tablet<span class="badge bg-danger rounded-pill">10%</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <!--end row-->

        </x-app-layout>
