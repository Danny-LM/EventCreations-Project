<div class="col">
    <div class="card event-card shadow-sm h-100">
        <!-- Image -->
        
        <!-- Content -->
        <div class="card-body event-card__content">
            <img src="{{ $event_image }}" alt="Event Image" class="img-fluid event-card__image mb-3">
            <p class="text.muted small mb-1 event-card__date">{{ $event_date }}</p>
            <h4 class="card-title event-card__title">{{ $event_title }}</h3>
            <p class="card-text event-card__description">
                {{ $event_description }}
            </p>

            <!-- Button -->
            <button class="btn btn-primary event-card__button"></button>
        </div>
    </div>
</div>