<x-base>

    <x-slot:content>
        <section class="section homepageHeader">
            <div class="homepageHeader__presentation">
                <h1>Thomas Bourgeois</h1>
                <h4>Développeur web en recherche d'emploi</h4>
            </div>
            <div id="lottie" class="homepageHeader__animation"></div>
            <div class="homepageHeader__arrow">
                <img src="{{ Vite::asset('resources/icons/arrow.svg') }}" alt="Arrow bottom">
            </div>
        </section>

        <section class="section homepageMyselfPresentation">
            <div class="homepageMyselfPresentation__description">
                <h2>Bonjour 👋</h2>
                <div class="homepageMyselfPresentation__textContainer">
                    <p>Je suis Thomas, développeur web. Mon but ? Allier design et performance afin d'obtenir la
                        meilleure expérience utilisateur. Passionné du numérique depuis le plus jeune âge, j'aime aussi la
                        photographie et le sport automobile.</p>
                    <br>
                    <p>C'est à partir de cette passion pour le numérique que j'ai fait un DUT Métiers du Multimédia et de
                        l'Internet (MMI) pour acquérir des compétences en design, en communication et en développement web.
                        À la suite de cette formation, je me suis spécialisé dans le développement web en rejoignant la Licence
                        Professionnelle Développeur d'Applications Web et Big Data. J'ai complété mon cursus en alternance
                        à La Développerie où j'intègre de nouvelles fonctionnalités pour des outils métiers.</p>
                </div>
                {{-- <a href="#" class="primaryButton homepageMyselfPresentation__viewMore">En découvrir plus</a> --}}
            </div>
            <div class="homepageMyselfPresentation__image">
                <div class="homepageMyselfPresentation__imageContainer">
                    <img class="homepageMyselfPresentation__imageContainer__image" src="{{ Vite::asset('resources/images/myself.jpg') }}"
                         alt="Thomas Bourgeois - Photo de profil">
                </div>
            </div>
        </section>

        <section class="section homepageProjects" id="projects_section">
            <div>
                <h2>👨‍💻 Mes réalisations</h2>
            </div>
            <div>
                <ul class="homepageProjects__projectsContainer">
                    @if ( $projects->count() )
                        @foreach ($projects as $project)
                            <x-project-card :project="$project" />
                        @endforeach                        
                    @else
                        <span>Aucun projet trouvé</span>
                    @endif
                    
                </ul>
            </div>
        </section>
    </x-slot:content>

    <x-slot:javascript>
        <script src="{{ Vite::asset('resources/js/lottie.js') }}" type="module" defer></script>
    </x-slot:javascript>
</x-base>