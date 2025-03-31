
<!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->

<div class="col">
    <div class="card h-100 shadow">
        <!-- Content -->
        <div class="card-body d-flex flex-column p-1">
            <!-- Title with icons -->
            <div class="d-flex align-items-center justify-content-center mb-2">
                <i class="fi fi-rr-edit fs-4 mx-1 align-middle"></i>
                <h3 class="fs-4 card-title mb-0">{{ $title }}</h3>
                <i class="fi fi-rr-pencil fs-4 mx-1 align-middle"></i>
            </div>

            <!-- Description Section -->
            <div class="flex-grow-1 px-3 text-start">
                <p class="text-secondary">
                    {{ $description }}
                </p>
            </div>

            <!-- Creation Date Section -->
            <div class="d-flex justify-content-end align-items-end pe-3 pb-2">
                <span class="">{{ $day }}/{{ $month }}</span>
            </div>

        </div>
    </div>
</div>
