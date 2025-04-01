
<!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->

<div class="col">
    <div class="card h-100 shadow">
        <!-- Content -->
        <div class="card-body d-flex flex-column p-1">
            <!-- Title with icons -->
            <div class="d-flex align-items-center justify-content-center mb-2">
                <i class="fi fi-rr-star fs-4 mx-1 align-middle"></i>
                <h3 class="fs-4 card-title">{{ $title }}</h3>
                <i class="fi fi-rr-pencil fs-4 mx-1 align-middle"></i>
            </div>

            <div class="d-flex flex-column flex-grow-1 justify-content-center align-items-center">
                <div class="w-100">
                    <!-- Date -->
                    <div class="shadow mini-card p-2 d-flex justify-content-between align-items-center mb-2">
                        <span class="ms-1 fw-bold fst-italic align-middle">Date</span>
                        <div class="mx-1 align-middle me-1">
                            <span class="align-middle">{{ $date }}</span>
                            <i class="fi fi-rr-calendar-clock align-middle"></i>
                        </div>
                    </div>
                    <!-- Type -->
                    <div class="shadow mini-card p-2 d-flex justify-content-between align-items-center mb-2">
                        <span class="ms-1 fw-bold fst-italic align-middle">Type</span>
                        <div class="mx-1 align-middle me-1">
                            <span class="align-middle">{{ $type }}</span>
                            <i class="fi fi-rr-tags align-middle"></i>
                        </div>
                    </div>
                    <!-- Theme -->
                    <div class="shadow mini-card p-2 d-flex justify-content-between align-items-center mb-2">
                        <span class="ms-1 fw-bold fst-italic align-middle">Theme</span>
                        <div class="mx-1 align-middle me-1">
                            <span class="align-middle">{{ $theme }}</span>
                            <i class="fi fi-rr-palette align-middle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
