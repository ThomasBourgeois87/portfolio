@props(['title', 'href', 'image'])

<a class="projectArticle__relatedProject" href="{{ $href }}">
    <div class="projectArticle__relatedProject__container">
        <h4>{{ $title }}</h4>
        <div class="projectArticle__relatedProject__container__imageContainer">
            <img
                class="projectArticle__relatedProject__container__imageContainer__image"
                src="{{ $image }}"
                alt="{{ $title }}"
            >
        </div>
    </div>
</a>