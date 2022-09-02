@props(['image', 'description'])

<figure class="projectArticle__content__imageContainer">
    <img src="{{ $image }}" alt="" class="projectArticle__content__imageContainer__image">
    @if (isset($description))
        <figcaption class="projectArticle__content__imageContainer__caption">{{ $description }}</figcaption>
    @endif
</figure>
