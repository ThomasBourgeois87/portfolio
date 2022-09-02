<x-base>

    <x-slot:content>
        <article class="section projectArticle">
            <nav class="projectArticle__navbar">
                <a href="/">Rour à l'accueil</a>

            </nav>
            <header class="projectArticle__header">
                <h1 class="projectArticle__header__title">{{ $project->name }}</h1>
                <div>
                    <ul class="projectArticle__header__categories">
                        <li>
                            <h5>{{ date('Y', strtotime($project->created_at)) }}</h5>
                        </li>
                        <li>
                            <h5>{{ $project->category->name }}</h5>
                        </li>
                        <li>
                            <h5>{{ $project->whereMade->name }}</h5>
                        </li>
                    </ul>
                </div>
                <div class="projectArticle__header__description">
                    <p>{{ $project->description }}</p>
                </div>
            </header>

            <div>
                <x-project-article.image :image="$project->cover_image"></x-project-article.image>

                @foreach ($project->projectArticleSection as $section)
                    @switch($section->type)
                        @case('image')
                            <section class="projectArticle__content__container">
                                <x-project-article.image :image="$section->content"></x-project-article.image>
                            </section>
                        @break

                        @case('text')
                            <section class="projectArticle__content__container">
                                <p>{{ $section->content }}</p>
                            </section>
                        @break

                        @case('github_link')
                            <section class="projectArticle__content__container">
                                <x-primary-button class="primaryButton" href="{{ $section->content }}">
                                    <img src="{{ Vite::asset('resources/icons/github.svg') }}" alt="Github icon">
                                    Voir sur Github
                                </x-primary-button>
                            </section>
                        @break
                    @endswitch
                @endforeach
            </div>

            <footer>

            </footer>

        </article>

    </x-slot:content>

    <x-slot:javascript>
    </x-slot:javascript>


</x-base>
