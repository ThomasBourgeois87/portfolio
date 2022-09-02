@props(['project'])

<li>
    <a href="{{ route('view_project', $project->slug) }}">
        <div class="cardProject" data-id="" id="project">
            <div class="cardProject__imageContainer">
                <img class="cardProject__image"
                    src="{{ $project->cover_image }}"
                    alt="Thomas Bourgeois - {{ $project->name }}"
                >
            </div>
            <div class="cardProject__content">
                <h5 class="cardProject__content__category">{{ $project->category->name }}</h5>
                <h3 class="cardProject__content__title">{{ $project->name }}</h3>
            </div>
        </div>
    </a>
</li>