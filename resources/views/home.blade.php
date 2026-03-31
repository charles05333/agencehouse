<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Need House | Conciergerie & Gestion Locative — Simplifiez votre location courte durée</title>
  <link rel="icon" type="image/svg+xml" href="{{ asset('docs/images/logo.svg') }}">
  <meta name="description" content="Need House, votre agence de conciergerie et gestion locative de A à Z. Photos pro, gestion des réservations, ménage, tarification dynamique. Maximisez vos revenus sans les tracas du quotidien." />
  <meta name="keywords" content="conciergerie, gestion location courte durée, gestion Airbnb, conciergerie immobilière, conciergerie pour propriétaires, location saisonnière, check-in check-out, ménage location saisonnière, accueil voyageurs, gestion locative personnalisée, tarification dynamique, optimisation annonce Airbnb, photos professionnelles location" />
  <meta name="author" content="Need House" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://www.needhouse.fr/" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.needhouse.fr/" />
  <meta property="og:title" content="Need House | Conciergerie & Gestion Locative" />
  <meta property="og:description" content="Simplifiez votre vie, confiez-nous vos biens. 20% HT de commission sur les revenus générés." />
  <meta property="og:locale" content="fr_FR" />
  <meta name="twitter:card" content="summary_large_image" />

  {{-- CSRF Token --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <script type="application/ld+json">{"@@context":"https://schema.org","@@type":"LocalBusiness","name":"Need House","description":"Agence de conciergerie et gestion locative courte durée","email":"agence.needhouse@gmail.com","telephone":"06.50.14.94.08","url":"https://www.needhouse.fr","sameAs":["https://www.instagram.com/agence.needhouse/",""],"serviceType":["Conciergerie immobilière","Gestion locative","Location courte durée"],"priceRange":"20% HT de commission"}</script>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}" />
</head>
<body data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="80">

  <!-- NAVBAR -->
  <nav id="mainNav" class="navbar navbar-expand-lg fixed-top" aria-label="Navigation principale">
    <div class="container">
      <a class="navbar-brand" href="#hero" aria-label="Need House — Accueil">
        <img src="{{ asset('docs/images/logo.png') }}" alt="Need House logo" class="nav-logo" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"
              aria-controls="navMenu" aria-expanded="false" aria-label="Ouvrir le menu">
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
          <li class="nav-item"><a class="nav-link" href="#about">À propos</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#mission">Mission</a></li>
          <li class="nav-item"><a class="nav-link" href="#tarifs">Tarifs</a></li>
          <li class="nav-item"><a class="nav-link" href="#avis">Avis</a></li>
          <li class="nav-item"><a class="nav-link" href="#actualites">Blog</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <section id="hero" class="hero-section" aria-label="Accueil">
    <div class="hero-overlay"></div>
    <div class="hero-accent hero-accent--1" aria-hidden="true"></div>
    <div class="hero-accent hero-accent--2" aria-hidden="true"></div>
    <div class="container hero-content">
      <div class="row justify-content-center text-center">
        <div class="col-12 col-md-10 col-lg-8">
          <h1 class="hero-title" data-reveal>
            Simplifiez <em>votre vie,</em><br />
            confiez-nous<br />
            vos biens.
          </h1>
          <div class="hero-actions justify-content-center" data-reveal data-delay="1">
            <a href="#contact" class="btn btn-hero-primary">Contactez-nous</a>
            <a href="#services" class="btn btn-hero-ghost">Découvrir nos services</a>
          </div>
        </div>
      </div>
    </div>
    <a href="#about" class="scroll-indicator" aria-label="Défiler vers le bas">
      <span class="scroll-line" aria-hidden="true"></span>
    </a>
  </section>

  <!-- À PROPOS -->
  <section id="about" class="section section--light" aria-labelledby="about-title">
    <div class="container">
      <div class="row align-items-center gy-5">
        <div class="col-lg-5" data-reveal>
          <div class="about-visual">
            <div class="about-img-frame"><div class="about-img-inner"></div></div>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-1" data-reveal data-delay="1">
          <p class="section-eyebrow section-eyebrow--dark">Qui sommes-nous ?</p>
          <h2 id="about-title" class="section-title section-title--black">À Propos de<br /><em class="about-em-prune">Need House</em></h2>
          <p class="section-body">Vous êtes propriétaire d'un bien immobilier et souhaitez le mettre en location sans les contraintes de gestion ?</p>
          <p class="section-body">Notre service de conciergerie et de gestion locative de A à Z est conçu pour vous offrir une tranquillité d'esprit totale.</p>
          <p class="section-body">Nous nous occupons de chaque aspect de la location, vous permettant de <strong>maximiser vos revenus</strong> sans les tracas du quotidien.</p>
          <a href="#contact" class="btn btn-outline-nh mt-3">Discutons de votre bien</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section id="services" class="section section--cream" aria-labelledby="why-title">
    <div class="container">
      <div class="text-center mb-section" data-reveal>
        <p class="section-eyebrow">Pourquoi nous choisir ?</p>
        <h2 id="why-title" class="section-title">Une conciergerie<br /><em>pensée pour vous</em></h2>
      </div>
      <div class="row gy-4">
        <div class="col-md-6 col-lg-4" data-reveal>
          <div class="feature-card feature-card--centered">
            <div class="feature-icon feature-icon--centered"><i class="bi bi-graph-up-arrow"></i></div>
            <h3 class="feature-title feature-title--lg">Visibilité maximale</h3>
            <p class="feature-body">Augmentez votre notoriété grâce à des annonces optimisées sur les meilleures plateformes.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-reveal data-delay="1">
          <div class="feature-card feature-card--centered">
            <div class="feature-icon feature-icon--centered"><i class="bi bi-chat-dots"></i></div>
            <h3 class="feature-title feature-title--lg">Contact facilité</h3>
            <p class="feature-body">Facilitez les prises de contact et les demandes de devis avec un formulaire dédié.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-reveal data-delay="2">
          <div class="feature-card feature-card--centered">
            <div class="feature-icon feature-icon--centered"><i class="bi bi-shield-check"></i></div>
            <h3 class="feature-title feature-title--lg">Rassurance totale</h3>
            <p class="feature-body">Confiez votre bien à des professionnels de confiance et dormez sur vos deux oreilles.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MISSION -->
  <section id="mission" class="section section--dark" aria-labelledby="mission-title">
    <div class="container">
      <div class="text-center mb-section" data-reveal>
        <p class="section-eyebrow section-eyebrow--light">Notre mission</p>
        <h2 id="mission-title" class="section-title section-title--light">Simplifier la gestion<br /><em>de votre bien</em></h2>
      </div>
      <div class="row gy-5 gx-lg-5">
        <div class="col-sm-6 col-lg-3" data-reveal>
          <div class="mission-item mission-item--centered">
            <div class="mission-number mission-number--white">01</div>
            <h3 class="mission-name">Mise en valeur du bien</h3>
            <p class="mission-desc">Photos professionnelles, rédaction d'annonces attractives, et diffusion sur les meilleures plateformes pour garantir une visibilité maximale.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3" data-reveal data-delay="1">
          <div class="mission-item mission-item--centered">
            <div class="mission-number mission-number--white">02</div>
            <h3 class="mission-name">Gestion des réservations</h3>
            <p class="mission-desc">Centralisation des plannings. Accueil et gestion des départs. Communication avec les voyageurs 7/7. Check-in &amp; check-out avec serrure connectée ou boîte à clés.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3" data-reveal data-delay="2">
          <div class="mission-item mission-item--centered">
            <div class="mission-number mission-number--white">03</div>
            <h3 class="mission-name">Service de ménage et entretien</h3>
            <p class="mission-desc">Coordination des services de nettoyage, gestion des petits travaux d'entretien. Intervention rapide en cas de besoin. Gestion du réassort.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3" data-reveal data-delay="3">
          <div class="mission-item mission-item--centered">
            <div class="mission-number mission-number--white">04</div>
            <h3 class="mission-name">Rentabilité optimisée</h3>
            <p class="mission-desc">Optimisation constante des prix à la nuitée selon le contexte. Maintien d'un positionnement compétitif et attractif afin de maximiser le taux d'occupation du logement.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- VALEURS -->
  <section id="valeurs" class="section section--light" aria-labelledby="valeurs-title">
    <div class="container">
      <div class="row align-items-center gy-5">
        <div class="col-lg-5" data-reveal>
          <p class="section-eyebrow">Ce qui nous guide</p>
          <h2 id="valeurs-title" class="section-title valeurs-title-inline">Nos Valeurs</h2>
          <p class="section-body">Chez Need House, nous avons bâti notre service de conciergerie autour de valeurs essentielles qui guident chaque action, chaque interaction et chaque prestation que nous réalisons. Ces principes reflètent notre engagement à fournir des services de haute qualité et à construire une relation de confiance durable avec nos clients.</p>
          <p class="italic-quote">« Need House aspire à devenir bien plus qu'un prestataire de services : un partenaire de confiance, dédié à votre confort et à votre bien-être. »</p>
        </div>
        <div class="col-lg-6 offset-lg-1" data-reveal data-delay="1">
          <div class="values-grid">
            <div class="value-item">
              <div class="value-icon"><i class="bi bi-trophy"></i></div>
              <div>
                <h3 class="value-name value-name--lg">Excellence</h3>
                <p class="value-desc"><b>Nous visons l'irréprochable dans toutes nos prestations. Chaque demande, qu'elle soit quotidienne ou exceptionnelle, est traitée avec le plus grand soin et une attention aux détails qui fait la différence. Votre satisfaction est notre priorité.</b></p>
              </div>
            </div>
            <div class="value-item">
              <div class="value-icon value-icon--filled"><i class="bi bi-shield-check"></i></div>
              <div>
                <h3 class="value-name value-name--lg">Confiance</h3>
                <p class="value-desc"><b>Nous croyons fermement que la transparence et le respect mutuel sont les fondations d'une collaboration solide. Nous respectons vos attentes tout en veillant à maintenir une communication claire.</b></p>
              </div>
            </div>
            <div class="value-item">
              <div class="value-icon"><i class="bi bi-lightning-charge"></i></div>
              <div>
                <h3 class="value-name value-name--lg">Réactivité</h3>
                <p class="value-desc"><b>Nous sommes disponibles et répondons rapidement à chaque sollicitation. En cas d'imprévu, nous intervenons sans délai pour garantir la continuité du service et votre tranquillité d'esprit.</b></p>
              </div>
            </div>
            <div class="value-item">
              <div class="value-icon"><i class="bi bi-puzzle"></i></div>
              <div>
                <h3 class="value-name value-name--lg">Adaptabilité</h3>
                <p class="value-desc"><b>Chaque bien est unique, et nos services le sont tout autant. Nous adaptons nos offres en fonction de vos attentes et de vos préférences pour créer une expérience sur mesure.</b></p>
              </div>
            </div>
            <div class="value-item">
              <div class="value-icon"><i class="bi bi-patch-check"></i></div>
              <div>
                <h3 class="value-name value-name--lg">Fiabilité</h3>
                <p class="value-desc"><b>Vous pouvez compter sur nous à tout moment. Que ce soit pour organiser des tâches quotidiennes ou gérer des situations complexes, nous tenons nos engagements avec rigueur et ponctualité.</b></p>
              </div>
            </div>
            <div class="value-item">
              <div class="value-icon"><i class="bi bi-heart"></i></div>
              <div>
                <h3 class="value-name value-name--lg">Bienveillance</h3>
                <p class="value-desc"><b>Nous plaçons l'humain au centre de nos services. Chaque client est important à nos yeux, et nous nous engageons à offrir un accompagnement attentionné, adapté à vos besoins uniques.</b></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TARIFS -->
  <section id="tarifs" class="section section--cream" aria-labelledby="tarifs-title">
    <div class="container">
      <div class="text-center mb-section" data-reveal>
        <p class="section-eyebrow section-eyebrow--lg">Transparence totale</p>
        <h2 id="tarifs-title" class="section-title tarifs-title-inline">Nos Tarifs</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-6" data-reveal>
          <div class="pricing-card">
            <div class="pricing-header">
              <p class="pricing-label">Formule unique</p>
              <div class="pricing-amount">
                <span class="pricing-value pricing-value--dark">20 %</span>
                <span class="pricing-period">HT de commission<br />sur les revenus générés<br /><small>(hors frais de ménage)</small></span>
              </div>
            </div>
            <ul class="pricing-list" role="list">
              <li class="pricing-item pricing-item--light"><i class="bi bi-check2"></i><span>État des lieux de votre logement</span></li>
              <li class="pricing-item pricing-item--light"><i class="bi bi-check2"></i><span>Création et optimisation de l'annonce</span></li>
              <li class="pricing-item pricing-item--light"><i class="bi bi-check2"></i><span>Tarification dynamique et maximisation du taux d'occupation</span></li>
              <li class="pricing-item pricing-item--light"><i class="bi bi-check2"></i><span>Entretien complet (ménage, linge, petits travaux)</span></li>
              <li class="pricing-item pricing-item--light"><i class="bi bi-check2"></i><span>Check-in et check-out</span></li>
              <li class="pricing-item pricing-item--light"><i class="bi bi-check2"></i><span>Communication &amp; assistance voyageurs 7j/7</span></li>
            </ul>
            <a href="#contact" class="btn btn-cta btn-cta--full">Démarrer maintenant</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ÉTAPES -->
  <section id="etapes" class="section section--light" aria-labelledby="etapes-title">
    <div class="container">
      <div class="text-center mb-section" data-reveal>
        <p class="section-eyebrow section-eyebrow--lg">Comment ça marche ?</p>
        <h2 id="etapes-title" class="section-title etapes-title-inline">Étapes clés</h2>
      </div>
      <div class="steps-timeline">
        <div class="step" data-reveal>
          <div class="step-marker"><span>1</span></div>
          <div class="step-content">
            <h3 class="step-title">Prise de contact</h3>
            <p class="step-body">Un rendez-vous téléphonique personnalisé. Parlez-nous de votre bien et explorons ensemble vos besoins spécifiques.</p>
          </div>
        </div>
        <div class="step" data-reveal data-delay="1">
          <div class="step-marker"><span>2</span></div>
          <div class="step-content">
            <h3 class="step-title">Visite du logement</h3>
            <p class="step-body">Visite du bien sur place, astuces et recommandations pour valoriser le logement au maximum.</p>
          </div>
        </div>
        <div class="step" data-reveal data-delay="2">
          <div class="step-marker"><span>3</span></div>
          <div class="step-content">
            <h3 class="step-title">Mise en place</h3>
            <p class="step-body">Récupération des clés, ménage en profondeur, installation des consommables, photos par un photographe professionnel et mise en ligne de l'annonce.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- AVIS CLIENTS -->
  <section id="avis" class="section section--cream" aria-labelledby="avis-title">
    <div class="container">
      <div class="text-center mb-section" data-reveal>
        <p class="section-eyebrow section-eyebrow--lg">Ce que disent nos clients</p>
        <h2 id="avis-title" class="section-title avis-title-inline">Avis clients</h2>
      </div>
      <div class="row gy-4">
        <div class="col-md-4" data-reveal>
          <article class="review-card" aria-label="Avis de Ryan">
            <div class="review-bg" style="background-image:url('https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=600&q=70&auto=format&fit=crop')"></div>
            <div class="review-inner">
              <div class="review-header">
                <span class="review-script">Avis client</span>
                <div class="review-stars" aria-label="5 étoiles sur 5">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
              </div>
              <blockquote class="review-body">
                <span class="review-quote-open">&#10077;</span>
                <p>Très beau logement propre, une bonne odeur lorsqu'on y entre. Tout est fait pour se sentir comme chez soi. Je recommande ce logement.</p>
                <span class="review-quote-close">&#10078;</span>
              </blockquote>
              <footer class="review-author">Ryan</footer>
            </div>
          </article>
        </div>
        <div class="col-md-4" data-reveal data-delay="1">
          <article class="review-card" aria-label="Avis de Hassan">
            <div class="review-bg" style="background-image:url('https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=600&q=70&auto=format&fit=crop')"></div>
            <div class="review-inner">
              <div class="review-header">
                <span class="review-script">Avis client</span>
                <div class="review-stars" aria-label="5 étoiles sur 5">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
              </div>
              <blockquote class="review-body">
                <span class="review-quote-open">&#10077;</span>
                <p>L'appartement correspond exactement au photo et à la description. Je reviendrai plus longtemps la prochaine fois car j'ai vraiment bien aimé l'environnement et le calme du quartier.</p>
                <span class="review-quote-close">&#10078;</span>
              </blockquote>
              <footer class="review-author">Hassan</footer>
            </div>
          </article>
        </div>
        <div class="col-md-4" data-reveal data-delay="2">
          <article class="review-card" aria-label="Avis de Alexander">
            <div class="review-bg" style="background-image:url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&q=70&auto=format&fit=crop')"></div>
            <div class="review-inner">
              <div class="review-header">
                <span class="review-script">Avis client</span>
                <div class="review-stars" aria-label="5 étoiles sur 5">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
              </div>
              <blockquote class="review-body">
                <span class="review-quote-open">&#10077;</span>
                <p>Tout est parfait ! Je recommande l'appartement et l'hôte !</p>
                <span class="review-quote-close">&#10078;</span>
              </blockquote>
              <footer class="review-author">Alexander</footer>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- ARTICLES / BLOG -->
  <section id="actualites" class="section section--light" aria-labelledby="blog-title">
    <div class="container">
      <div class="text-center mb-section" data-reveal>
        <p class="section-eyebrow section-eyebrow--lg">Conseils &amp; actualités</p>
        <h2 id="blog-title" class="section-title blog-title-inline">Nos articles</h2>
      </div>
      <div class="row gy-5">
        <div class="col-lg-4" data-reveal>
          <article class="blog-card" itemscope itemtype="https://schema.org/Article">
            <div class="blog-img" style="background-image:url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=700&q=75&auto=format&fit=crop')" role="img" aria-label="Conciergerie location courte durée"></div>
            <div class="blog-body">
              <span class="blog-tag">Conciergerie</span>
              <h3 class="blog-title-text" itemprop="headline">Pourquoi faire appel à une conciergerie pour sa location courte durée ?</h3>
              <p class="blog-excerpt" itemprop="description">La location courte durée (ou saisonnière) est un excellent moyen de rentabiliser un bien immobilier. Mais sa gestion demande du temps, de l'organisation et un certain savoir-faire. C'est ici qu'intervient la conciergerie. Voici pourquoi déléguer à des professionnels est un choix stratégique.</p>
              <button class="blog-read-more" aria-expanded="false" aria-controls="article1-full">Lire l'article <i class="bi bi-arrow-right"></i></button>
              <div id="article1-full" class="blog-full-text" hidden itemprop="articleBody">
                <p><strong>1. Gain de temps considérable</strong><br />Gérer les réservations, accueillir les voyageurs, nettoyer entre chaque séjour... Cela peut vite devenir chronophage. Une conciergerie s'occupe de tout, vous permettant de vous libérer totalement.</p>
                <p><strong>2. Meilleure rentabilité</strong><br />Grâce à la tarification dynamique et à l'optimisation des annonces, la conciergerie maximise vos revenus en ajustant les prix selon la demande, les saisons et les événements locaux.</p>
                <p><strong>3. Expérience client professionnelle</strong><br />Des voyageurs bien accueillis laissent de meilleurs avis. La conciergerie veille à offrir un service irréprochable : logement impeccable, check-in fluide, assistance 7j/7.</p>
                <p><strong>4. Gestion des imprévus</strong><br />Un problème de serrure ? Une panne d'eau chaude ? La conciergerie intervient rapidement pour éviter les mauvaises surprises.</p>
                <p><strong>5. Tranquillité d'esprit</strong><br />Vous percevez vos revenus locatifs sans stress. Le service est clé en main, du ménage à la communication avec les voyageurs.</p>
              </div>
            </div>
          </article>
        </div>
        <div class="col-lg-4" data-reveal data-delay="1">
          <article class="blog-card" itemscope itemtype="https://schema.org/Article">
            <div class="blog-img" style="background-image:url('https://images.unsplash.com/photo-1484154218962-a197022b5858?w=700&q=75&auto=format&fit=crop')" role="img" aria-label="Erreurs location courte durée"></div>
            <div class="blog-body">
              <span class="blog-tag">Conseils</span>
              <h3 class="blog-title-text" itemprop="headline">Les erreurs à éviter en location courte durée (et comment les corriger)</h3>
              <p class="blog-excerpt" itemprop="description">Même avec les meilleures intentions, les propriétaires novices peuvent commettre des erreurs qui nuisent à la rentabilité et à la réputation de leur bien. Voici les principales, et comment les éviter.</p>
              <button class="blog-read-more" aria-expanded="false" aria-controls="article2-full">Lire l'article <i class="bi bi-arrow-right"></i></button>
              <div id="article2-full" class="blog-full-text" hidden itemprop="articleBody">
                <p><strong>1. Des photos de mauvaise qualité</strong><br />Elles donnent une mauvaise première impression. Faites appel à un photographe pro ou utilisez un bon smartphone avec lumière naturelle.</p>
                <p><strong>2. Mauvaise communication</strong><br />Des réponses lentes ou incomplètes font fuir les réservations. Une conciergerie répond rapidement et efficacement 7j/7.</p>
                <p><strong>3. Logement mal préparé</strong><br />Le ménage et le linge doivent être irréprochables. Une conciergerie professionnelle garantit ce niveau d'exigence.</p>
                <p><strong>4. Absence de règles claires</strong><br />Indiquez vos règles dans l'annonce et sur place (animaux, fumeurs, bruit, check-out). Cela évite bien des litiges.</p>
                <p><strong>5. Mauvais positionnement tarifaire</strong><br />Un prix trop bas vous fait perdre de l'argent ; trop haut, vous manquez de réservations. La tarification dynamique est la solution.</p>
              </div>
            </div>
          </article>
        </div>
        <div class="col-lg-4" data-reveal data-delay="2">
          <article class="blog-card" itemscope itemtype="https://schema.org/Article">
            <div class="blog-img" style="background-image:url('https://images.unsplash.com/photo-1554995207-c18c203602cb?w=700&q=75&auto=format&fit=crop')" role="img" aria-label="Courte durée vs longue durée"></div>
            <div class="blog-body">
              <span class="blog-tag">Stratégie</span>
              <h3 class="blog-title-text" itemprop="headline">Location courte durée ou longue durée : que choisir en 2026 ?</h3>
              <p class="blog-excerpt" itemprop="description">Vous hésitez entre louer votre bien en courte durée ou en longue durée ? Voici une comparaison claire pour vous aider à choisir.</p>
              <button class="blog-read-more" aria-expanded="false" aria-controls="article3-full">Lire l'article <i class="bi bi-arrow-right"></i></button>
              <div id="article3-full" class="blog-full-text" hidden itemprop="articleBody">
                <p><strong>1. Rentabilité</strong><br /><strong>Courte durée :</strong> revenus plus élevés mais variables, dépendant de la saisonnalité.<br /><strong>Longue durée :</strong> revenus stables mais généralement moins élevés.</p>
                <p><strong>2. Fiscalité</strong><br />Les régimes LMNP (meublé non pro) en courte durée offrent des avantages. En longue durée, régime micro ou réel simplifié selon les cas.</p>
                <p><strong>3. Gestion</strong><br /><strong>Courte durée :</strong> nécessite du temps, ou une conciergerie.<br /><strong>Longue durée :</strong> plus passif, mais attention aux impayés et durée d'engagement.</p>
                <p><strong>4. Flexibilité</strong><br /><strong>Courte durée :</strong> plus de liberté pour utiliser votre logement (résidence secondaire).<br /><strong>Longue durée :</strong> bail rigide, préavis, contraintes réglementaires.</p>
                <p><strong>Conclusion :</strong> Si vous souhaitez maximiser vos revenus et êtes prêt à déléguer la gestion, la location courte durée reste la plus rentable. La clé ? S'entourer d'une bonne conciergerie.</p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" class="section section--dark" aria-labelledby="contact-title">
    <div class="container">
      <div class="row gy-5 align-items-start">
        <div class="col-lg-4" data-reveal>
          <h2 id="contact-title" class="section-title section-title--light"><em>Contactez-nous</em></h2>
          <p class="section-body section-body--light">Vous êtes propriétaire d'un logement et souhaitez optimiser sa gestion en toute sérénité ?<br />
            Remplissez le formulaire — nous vous répondons sous 24h.</p>
        </div>
        <div class="col-lg-8" data-reveal data-delay="1">
          {{-- Formulaire avec route Laravel et token CSRF --}}
          <form id="contactForm"
                class="contact-form"
                method="POST"
                action="{{ route('contact.send') }}"
                novalidate
                aria-label="Formulaire de contact et devis">
            @csrf

            {{-- Affichage des erreurs de validation --}}
            @if ($errors->any())
              <div class="alert alert-danger mb-4" role="alert">
                <ul class="mb-0">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            {{-- Message de succès après envoi --}}
            @if (session('success'))
              <div class="alert alert-success mb-4" role="alert">
                {{ session('success') }}
              </div>
            @endif

            <div class="form-group-label">Vos coordonnées</div>
            <div class="row g-3 mb-4">

              {{-- Nom --}}
              <div class="col-sm-6">
                <label for="lastName" class="form-label">Nom <span>*</span></label>
                <input type="text"
                       id="lastName"
                       name="lastName"
                       class="form-control nh-input @error('lastName') is-invalid @enderror"
                       placeholder="Dupont"
                       value="{{ old('lastName') }}"
                       required
                       autocomplete="family-name" />
                @error('lastName')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">Veuillez saisir votre nom.</div>
              </div>

              {{-- Prénom --}}
              <div class="col-sm-6">
                <label for="firstName" class="form-label">Prénom <span>*</span></label>
                <input type="text"
                       id="firstName"
                       name="firstName"
                       class="form-control nh-input @error('firstName') is-invalid @enderror"
                       placeholder="Jean"
                       value="{{ old('firstName') }}"
                       required
                       autocomplete="given-name" />
                @error('firstName')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">Veuillez saisir votre prénom.</div>
              </div>

              {{-- E-mail --}}
              <div class="col-sm-6">
                <label for="email" class="form-label">E-mail <span>*</span></label>
                <input type="email"
                       id="email"
                       name="email"
                       class="form-control nh-input @error('email') is-invalid @enderror"
                       placeholder="jean.dupont@email.com"
                       value="{{ old('email') }}"
                       required
                       autocomplete="email" />
                @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">Adresse email invalide.</div>
              </div>

              {{-- Téléphone --}}
              <div class="col-sm-6">
                <label for="phone" class="form-label">Téléphone <span>*</span></label>
                <input type="tel"
                       id="phone"
                       name="phone"
                       class="form-control nh-input @error('phone') is-invalid @enderror"
                       placeholder="06 XX XX XX XX"
                       value="{{ old('phone') }}"
                       required
                       autocomplete="tel" />
                @error('phone')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">Veuillez saisir votre numéro.</div>
              </div>

            </div>

            <div class="form-group-label">Votre bien immobilier</div>
            <div class="row g-3 mb-4">

              {{-- Adresse --}}
              <div class="col-12">
                <label for="address" class="form-label">Adresse postale <span>*</span></label>
                <input type="text"
                       id="address"
                       name="address"
                       class="form-control nh-input @error('address') is-invalid @enderror"
                       placeholder="12 rue des Lilas"
                       value="{{ old('address') }}"
                       required
                       autocomplete="street-address" />
                @error('address')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">Veuillez saisir l'adresse du bien.</div>
              </div>

              {{-- Ville --}}
              <div class="col-sm-6">
                <label for="city" class="form-label">Ville <span>*</span></label>
                <input type="text"
                       id="city"
                       name="city"
                       class="form-control nh-input @error('city') is-invalid @enderror"
                       placeholder="Paris"
                       value="{{ old('city') }}"
                       required
                       autocomplete="address-level2" />
                @error('city')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">Veuillez saisir la ville.</div>
              </div>

              {{-- Superficie --}}
              <div class="col-sm-6">
                <label for="surface" class="form-label">Superficie en m² <span>*</span></label>
                <input type="number"
                       id="surface"
                       name="surface"
                       class="form-control nh-input @error('surface') is-invalid @enderror"
                       placeholder="45"
                       value="{{ old('surface') }}"
                       min="5"
                       required />
                @error('surface')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">Veuillez indiquer la superficie.</div>
              </div>

              {{-- Type de logement --}}
              <div class="col-sm-4">
                <label for="propertyType" class="form-label">Type de logement</label>
                <select id="propertyType" name="propertyType" class="form-select nh-input @error('propertyType') is-invalid @enderror">
                  <option value="" disabled {{ old('propertyType') ? '' : 'selected' }}>Sélectionner</option>
                  <option value="appartement" {{ old('propertyType') === 'appartement' ? 'selected' : '' }}>Appartement</option>
                  <option value="maison"      {{ old('propertyType') === 'maison'      ? 'selected' : '' }}>Maison</option>
                  <option value="villa"       {{ old('propertyType') === 'villa'       ? 'selected' : '' }}>Villa</option>
                  <option value="studio"      {{ old('propertyType') === 'studio'      ? 'selected' : '' }}>Studio</option>
                  <option value="autre"       {{ old('propertyType') === 'autre'       ? 'selected' : '' }}>Autre</option>
                </select>
                @error('propertyType')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              {{-- Chambres --}}
              <div class="col-sm-4">
                <label for="bedrooms" class="form-label">Chambres <span>*</span></label>
                <select id="bedrooms" name="bedrooms" class="form-select nh-input @error('bedrooms') is-invalid @enderror" required>
                  <option value="" disabled {{ old('bedrooms') ? '' : 'selected' }}>Sélectionner</option>
                  <option value="0"  {{ old('bedrooms') === '0'  ? 'selected' : '' }}>Studio / 0</option>
                  <option value="1"  {{ old('bedrooms') === '1'  ? 'selected' : '' }}>1 chambre</option>
                  <option value="2"  {{ old('bedrooms') === '2'  ? 'selected' : '' }}>2 chambres</option>
                  <option value="3"  {{ old('bedrooms') === '3'  ? 'selected' : '' }}>3 chambres</option>
                  <option value="4"  {{ old('bedrooms') === '4'  ? 'selected' : '' }}>4 chambres</option>
                  <option value="5+" {{ old('bedrooms') === '5+' ? 'selected' : '' }}>5 et +</option>
                </select>
                @error('bedrooms')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">Veuillez sélectionner.</div>
              </div>

              {{-- Salle de bain --}}
              <div class="col-sm-4">
                <label for="bathrooms" class="form-label">Salle de bain <span>*</span></label>
                <select id="bathrooms" name="bathrooms" class="form-select nh-input @error('bathrooms') is-invalid @enderror" required>
                  <option value="" disabled {{ old('bathrooms') ? '' : 'selected' }}>Sélectionner</option>
                  <option value="1" {{ old('bathrooms') === '1' ? 'selected' : '' }}>1</option>
                  <option value="2" {{ old('bathrooms') === '2' ? 'selected' : '' }}>2</option>
                  <option value="3" {{ old('bathrooms') === '3' ? 'selected' : '' }}>3 et +</option>
                </select>
                @error('bathrooms')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">Veuillez sélectionner.</div>
              </div>

              {{-- Capacité --}}
              <div class="col-sm-6">
                <label for="capacity" class="form-label">Capacité d'accueil <span>*</span></label>
                <input type="number"
                       id="capacity"
                       name="capacity"
                       class="form-control nh-input @error('capacity') is-invalid @enderror"
                       placeholder="4 personnes"
                       value="{{ old('capacity') }}"
                       min="1"
                       required />
                @error('capacity')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">Veuillez indiquer la capacité.</div>
              </div>

              {{-- Message --}}
              <div class="col-sm-6">
                <label for="message" class="form-label">Message complémentaire</label>
                <input type="text"
                       id="message"
                       name="message"
                       class="form-control nh-input"
                       placeholder="Questions, précisions…"
                       value="{{ old('message') }}" />
              </div>

            </div>

            <button type="submit" class="btn btn-cta btn-cta--full" id="submitBtn">
              <span class="btn-text">Envoyer ma demande</span>
            </button>

            <div id="formFeedback" class="mt-3" aria-live="polite"></div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="site-footer" role="contentinfo">
    <div class="container">
      <div class="footer-inner">
        <div class="footer-brand">
          <img src="{{ asset('docs/images/logo.png') }}" alt="Need House" class="footer-logo" />
          <p class="footer-tagline">Simplifiez votre vie,<br />confiez-nous vos biens.</p>
        </div>
        <nav class="footer-nav" aria-label="Navigation pied de page">
          <a href="#about">À propos</a>
          <a href="#services">Services</a>
          <a href="#mission">Mission</a>
          <a href="#tarifs">Tarifs</a>
          <a href="#etapes">Étapes</a>
          <a href="#avis">Avis</a>
          <a href="#actualites">Blog</a>
          <a href="#contact">Contact</a>
          <a href="{{ route('mentions-legales') }}">Mentions légales</a>
        </nav>
        <div class="footer-social">
          <a href="https://www.instagram.com/agence.needhouse/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; {{ date('Y') }} Need House — Tous droits réservés.</p>
        <p><a href="{{ route('mentions-legales') }}" style="color:inherit;text-decoration:underline;">Mentions légales</a></p>
      </div>
    </div>
  </footer>

  <button class="back-to-top" id="backToTop" aria-label="Retour en haut de page">
    <i class="bi bi-arrow-up"></i>
  </button>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="{{ asset('asset/js/main.js') }}"></script>
  
</body>
</html>