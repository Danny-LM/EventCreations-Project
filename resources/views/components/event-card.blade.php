
<!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->

<div class="col">
    <div class="card h-100 shadow">
        <!-- Content -->
        <div class="card-body d-flex flex-column p-1">
            <img src="{{ $event_image }}" alt="Event Image" class="img-fluid h-100 card-img-top mb-2">
            <h4 class="card-title mb-2">{{ $event_title }}</h3>
            <p class="text-muted small mb-1">{{ $event_date }}</p>

            <div class="flex-grow-1"></div>

            <!-- Button -->
            <div class="p-3">
                <button class="btn btn-primary btn-sm aling-self-end mt-2">Ver más</button>
            </div>

        </div>
    </div>
</div>