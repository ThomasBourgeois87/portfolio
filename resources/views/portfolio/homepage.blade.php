<x-base>

    <x-slot:content>
        <section class="section homepageHeader">
            <div class="homepageHeader__presentation">
                <h1>Thomas Bourgeois</h1>
                <h4>Développeur web en recherche d'emploi</h4>
            </div>
            <div class="homepageHeader__arrow">
                <img src="{{ Vite::asset('resources/icons/arrow.svg') }}" alt="Arrow bottom">
            </div>
        </section>

        <section class="section homepageMyselfPresentation">
            <div class="homepageMyselfPresentation__description">
                <h2>Bonjour 👋</h2>
                <div class="homepageMyselfPresentation__textContainer">
                    <p>Je suis Thomas, développeur web. Mon but ? Allier design et performance afin d'obetnir la
                        meilleure expérience utilisateur. Passionné du numérique depuis le plus jeune âge, j'aime aussi la
                        photographie et le sport automobile.</p>
                    <br>
                    <p>C'est à partir de cette passion pour le numérique que j'ai fait un DUT Métiers du Multimédia et de
                        l'Internet (MMI) pour acquérir des compétences en design, en communication et en développement web.
                        Suite à cette formation, je me suis spécialisé dans le développement web en rejoignant la licence
                        professionnelle Développeur d'Applications Web et Big Data. J'ai complété mon cursus en alternance
                        à La Développerie où j'intègre de nouvelles fonctionnalités pour des outils métiers.</p>
                </div>
            </div>
            <div class="homepageMyselfPresentation__image">
                <div class="homepageMyselfPresentation__imageContainer">
                    <img class="homepageMyselfPresentation__imageContainer__image" src="{{ Vite::asset('resources/images/myself.jpg') }}"
                         alt="Thomas Bourgeois - Photo de profil">
                </div>
            </div>
        </section>

        <section class="section homepageSkills">
            <div>
                <h2>💪 Mes compétences</h2>
                <ul class="homepageSkills__list">
                    <li>
                        <div class="cardSkill">
                            <img class="cardSkill__image"
                                 src="{{ Vite::asset('resources/images/computer.png') }}" alt="Thomas Bourgeois - Image développement web">
                            <h4 class="cardSkill__skill">Dev web</h4>
                        </div>
                    </li>
                    <li>
                        <div class="cardSkill">
                            <img class="cardSkill__image"
                                 src="{{ Vite::asset('resources/images/palette.png') }}" alt="Thomas Bourgeois - Image UI-UX design">
                            <h4 class="cardSkill__skill">UI/UX Design</h4>
                        </div>
                    </li>
                    <li>
                        <div class="cardSkill">
                            <img class="cardSkill__image"
                                 src="{{ Vite::asset('resources/images/thumb-up.png') }}" alt="Thomas Bourgeois - Image communication">
                            <h4 class="cardSkill__skill">Communication</h4>
                        </div>
                    </li>
    
                </ul>
            </div>
            <div class="homepageSkills__skillsContainer">
                <div class="homepageSkills__skillsContainer__skills">
                    <h3>Technologies</h3>
                    <p>PHP & Symfony</p>
                    <p>TypeScript - Vue.js & Node.js</p>
                    <p>Base de données - SQL & MongoDB</p>
                </div>
                <div class="homepageSkills__skillsContainer__skills">
                    <h3>Soft skills</h3>
                    <p>Docker</p>
                    <p>Git</p>
                    <p>Figma</p>
                    <p>Suite Adobe (Photoshop & Illustrator & Premiere Pro & After Effects)</p>
                    <p>
                        <a style="text-decoration: underline" href="https://directory.opquast.com/fr/certificat/1HUSYV/">Certification Opquast</a>
                    </p>
                </div>
            </div>
    
        </section>

        <section class="section homepageProjects">
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

    <x-slot:javascript></x-slot:javascript>
</x-base>