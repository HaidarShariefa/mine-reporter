<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
    <title>Mine Reporter</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"
          ><img
            src="assets/IMAS_Mine_Hazard_Sign_-_Square.svg.png"
            alt="Bootstrap"
            width="50"
            height="45"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link breadcrumb-item"
                aria-current="page"
                href="#home"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link breadcrumb-item"
                aria-current="page"
                href="#whatWeDo"
              >
                What we do
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link breadcrumb-item"
                aria-current="page"
                href="#howToHelp"
              >
                How to help
              </a>
            </li>
            <li class="nav-item">
              <button
                type="button"
                class="btn btn-outline-primary"
                data-bs-toggle="modal"
                data-bs-target="#loginModal"
              ><i class="fa-solid fa-right-to-bracket"></i>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<div
  class="modal fade"
  id="loginModal"
  tabindex="-1"
  aria-labelledby="loginModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <form id="loginForm" action="login.php" method="post">
          <div class="mb-3">
            <label for="emailInput" class="form-label">Email address</label>
            <input
              type="email"
              class="form-control"
              id="emailInput"
              name="email"
              required
            />
          </div>
          <div class="mb-3">
            <label for="passwordInput" class="form-label">Password</label>
            <input
              type="password"
              class="form-control"
              id="passwordInput"
              name="password"
              required
            />
          </div>
          <button type="submit" class="btn btn-success">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <button
          type="button"
          class="btn btn-secondary"
          data-bs-dismiss="modal"
        >
          Close
        </button>
      </div>
    </div>
  </div>
</div>


    <div class="header">
      <div class="header-content">
        <h1>Save Lives, Build Safer Futures</h1>
      </div>
    </div>

    <section class="welcome-section py-5" id="home">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1>Welcome to Mine Reporter</h1>
            <p class="lead">
              Your modern platform to report mines and save lives
            </p>
          </div>
        </div>
      </div>
    </section>

    <div class="container" id="cards">
      <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <img src="assets/1.webp" alt="" />
            <div class="card-body">
              <h5 class="card-title">Mines througout history</h5>
              <p class="card-text">
                Mines have been one of the most lethal weapons througout
                history, it's advised to be educated about such matters.
              </p>
              <button
                class="btn btn-primary"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#minesThroughoutHistory"
                aria-controls="offcanvasScrolling"
              >
                Read More
              </button>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <img src="assets/mine1.webp" alt="" />
            <div class="card-body">
              <h5 class="card-title">Mine Dangers</h5>
              <p class="card-text">
                Be aware of mines in natural areas as they form a very major
                threat to human lives
              </p>
              <button
                class="btn btn-primary"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#mineDangers"
                aria-controls="offcanvasScrolling"
              >
                Read More
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div
      class="offcanvas offcanvas-start"
      data-bs-scroll="true"
      data-bs-backdrop="false"
      tabindex="-1"
      id="minesThroughoutHistory"
      aria-labelledby="offcanvasScrollingLabel"
    >
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">
          Mines througout history
        </h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <div class="offcanvas-body">
        <p>

Landmines have a long and harrowing history, evolving from rudimentary explosive devices to sophisticated tools of war. Throughout centuries, they have been used in various forms, leaving a legacy of destruction that continues to affect the world today. The history of landmines is not only a tale of technological innovation but also a sobering reminder of the human cost of conflict.

The concept of landmines dates back to ancient times, with the earliest forms resembling booby traps rather than the modern mines we recognize today. In the 3rd century BC, the Chinese military strategist Zhuge Liang is credited with inventing an early version of a landmine, known as the "land thunder." This device consisted of a buried container filled with gunpowder, which was triggered by pressure, releasing shrapnel to maim or kill the enemy.

During the Middle Ages, similar devices were used in Europe, often consisting of pits filled with sharpened stakes, covered by a thin layer of soil. These were intended to injure enemy soldiers or cavalry as they advanced. However, these early traps were relatively simple and lacked the explosive power of later designs.

The development of modern landmines began in earnest during the 19th century, spurred by advances in explosives and industrial manufacturing. The American Civil War (1861-1865) saw the first widespread use of pressure-activated mines, known as "torpedoes." Confederate forces deployed these devices to protect strategic locations and slow the advance of Union troops.

World War I marked a significant turning point in the use of landmines. The introduction of trench warfare led to the widespread deployment of mines as defensive weapons, designed to protect positions and deter enemy advances. The technology continued to evolve, with more reliable triggering mechanisms and greater explosive power.

World War II saw an unprecedented use of landmines on all fronts. Both Axis and Allied forces employed millions of mines to fortify defensive lines, disrupt supply routes, and protect key positions. The German "S-mine," also known as the "Bouncing Betty," became infamous for its deadly effectiveness. This mine would launch into the air before detonating at waist height, causing widespread casualties.

The end of World War II did not mark the end of landmines; rather, their use proliferated during the Cold War and numerous regional conflicts. In Vietnam, both American and Vietnamese forces used vast quantities of landmines, contributing to the heavy toll of civilian casualties that continues to this day.

The 20th century saw the development of more sophisticated and deadly types of mines, including anti-tank mines and cluster munitions. These devices were designed not only to kill but to create lasting obstacles in war-torn areas, complicating reconstruction and recovery efforts.

The widespread use of landmines during conflicts in Africa, the Middle East, and Asia has left a devastating legacy. Countries like Afghanistan, Cambodia, and Angola remain heavily contaminated with mines, posing a constant threat to civilian populations.

The global community has made significant strides in addressing the legacy of landmines. The Ottawa Treaty of 1997, which aims to eliminate anti-personnel mines, represents a landmark achievement in international disarmament. However, the continued use of landmines by some states and non-state actors, as well as the slow pace of mine clearance in many regions, highlights the ongoing challenges.

Modern efforts focus not only on clearing existing mines but also on preventing future use. Innovations in mine detection technology, such as drones and ground-penetrating radar, are improving the efficiency of clearance operations. Additionally, global awareness campaigns and survivor assistance programs are essential in addressing the humanitarian impact of landmines.

The history of landmines is a testament to the enduring impact of war on both the battlefield and beyond. From their rudimentary beginnings to their sophisticated modern forms, landmines have caused untold suffering and continue to pose a significant global challenge. While progress has been made in mitigating their impact, the journey towards a mine-free world is far from complete. Continued international cooperation and innovation are crucial in overcoming this dark legacy of conflict.
        </p>
      </div>
    </div>
    <div
      class="offcanvas offcanvas-start"
      data-bs-scroll="true"
      data-bs-backdrop="false"
      tabindex="-1"
      id="mineDangers"
      aria-labelledby="offcanvasScrollingLabel"
    >
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">
          Mine Dangers
        </h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <div class="offcanvas-body">
        <p>

Landmines are one of the most insidious remnants of war, posing a persistent danger long after conflicts have ended. Designed to maim or kill, these explosive devices are often hidden just beneath the surface of the ground, where they lie dormant until triggered by an unsuspecting person or animal. The dangers of landmines are profound and multifaceted, affecting individuals, communities, and entire countries.

The primary victims of landmines are civilians, including children, who stumble upon these hidden dangers while going about their daily lives. Unlike other weapons, landmines are indiscriminate; they cannot distinguish between a soldier and a civilian, nor between a child and an adult. The injuries caused by landmines are often devastating, resulting in the loss of limbs, severe shrapnel wounds, and psychological trauma. Survivors of landmine explosions frequently require extensive medical treatment and long-term rehabilitation, which can be scarce in the countries most affected by these weapons.

The presence of landmines has severe economic and social implications for affected communities. Fields that were once fertile and used for agriculture become inaccessible, leading to food shortages and loss of income for farmers. Infrastructure projects, such as the construction of roads, schools, and hospitals, are delayed or abandoned due to the risk of landmines. Moreover, the fear of landmines can prevent displaced people from returning to their homes after a conflict, prolonging the refugee crisis and hampering post-war recovery efforts.

-The Environmental Impact:
Landmines also have a detrimental effect on the environment. Areas contaminated with mines are often left untouched for fear of triggering explosions, leading to land degradation and a reduction in biodiversity. Animals, particularly those that roam large areas, are at risk of triggering mines, leading to injury or death. Additionally, the presence of mines can disrupt traditional land-use patterns, forcing communities to over-exploit safe areas and leading to environmental stress.

Over the years, significant efforts have been made to address the dangers of landmines. The Ottawa Treaty, also known as the Mine Ban Treaty, was adopted in 1997 and has been signed by over 160 countries. This treaty prohibits the use, production, and transfer of anti-personnel mines and mandates their destruction. However, several major powers, including the United States, Russia, and China, have not signed the treaty, limiting its effectiveness.

Mine clearance operations, often conducted by specialized humanitarian organizations, are critical in making affected areas safe again. These operations involve painstakingly locating and removing mines, a process that is both dangerous and time-consuming. Despite these efforts, millions of landmines remain in the ground, posing a continuous threat.

Landmines are a tragic legacy of past and present conflicts, with their dangers persisting long after the guns have fallen silent. They inflict untold suffering on individuals and communities, hinder economic development, and devastate the environment. While international efforts to eliminate landmines have made progress, much work remains to be done. It is imperative that the global community continues to support mine clearance operations and push for the universal adoption of the Mine Ban Treaty to protect future generations from the scourge of landmines.
        </p>
      </div>
    </div>
    <br />
    <br />
    <br />

    <section class="what-we-do-section py-5" id="whatWeDo">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1>What we do</h1>
            <p class="lead">
              Our mission is to create safer environments for communities
              affected by landmines, unexploded ordnance (UXO), and other
              remnants of conflict. We work tirelessly in some of the world's
              most challenging and dangerous regions to locate, remove, and
              destroy these deadly hazards. Our efforts not only save lives but
              also enable displaced families to return to their homes, children
              to go to school safely, and farmers to cultivate their land
              without fear. Through comprehensive mine clearance operations,
              risk education, and advocacy, we aim to build a world where
              everyone can live, work, and play without the threat of explosive
              remnants of war. Our dedicated teams of experts, often working in
              partnership with local communities, governments, and international
              organizations, are committed to restoring peace and security,
              fostering development, and providing hope for a better, mine-free
              future.
            </p>
          </div>
        </div>
      </div>
    </section>

    <br />
    <br />
    <br />

    <div class="container" id="slider">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/slider1.jpg" class="d-block mx-auto" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="assets/slider2.jpg" class="d-block mx-auto" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="assets/slider3.jpg" class="d-block mx-auto" alt="..." />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <br />
    <br />
    <br />

    <section class="how-to-help-section py-5" id="howToHelp">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1>How to help</h1>
            <p class="lead">
              Your vigilance can save lives. If you encounter landmines,
              unexploded ordnance (UXO), or any suspicious objects in public
              areas, reporting them through our platform can make a significant
              difference. By promptly sharing information about the location and
              appearance of these hazards, you help our expert teams respond
              quickly and effectively. Simply use our reporting tool to provide
              details and, if possible, upload photos. Your reports enable us to
              prioritize and address threats, ensuring that communities are made
              safe as swiftly as possible. Remember, never attempt to touch or
              move any suspicious objects. Your safety is paramount, and by
              using our platform, you play a crucial role in our mission to
              eliminate these dangers and protect lives.
            </p>
            <button
              type="button"
              class="btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#civilianReport"
            >
              New Report
            </button>
          </div>
        </div>
      </div>
    </section>

    <div
      class="modal fade"
      id="civilianReport"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">
              New Report
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <!-- Latitude and Longitude -->

          <div class="modal-body">
            <form id="submitReportForm" method="POST" action="civilian_reports.php">
              <div class="mb-3">
                <label for="latitude" class="form-label">Latitude</label>
                <input
                  type="text"
                  class="form-control"
                  id="latitude"
                  name="latitude"
                  readonly
                />
              </div>
              <div class="mb-3">
                <label for="longitude" class="form-label">Longitude</label>
                <input
                  type="text"
                  class="form-control"
                  id="longitude"
                  name="longitude"
                  readonly
                />
              </div>

              <!-- Quantity -->

              <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input
                  type="number"
                  class="form-control"
                  id="quantity"
                  name="quantity"
                />
              </div>
              <!-- date -->

              <div class="mb-3">
                <label for="reportDate" class="form-label">Report Date</label>
                <input
                  type="date"
                  class="form-control"
                  id="reportDate"
                  name="reportDate"
                  readonly
                />
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>

    <br />
    <br />

    <footer class="bg-dark text-white text-center py-3">
      <div class="container">
        <p class="mb-0">© Mine Reporter</p>
        <p class="mb-0">
          <a href="mailto:haidarshariefa33451@gmail.com" class="text-white"
            ><i class="fa-regular fa-envelope"></i></a
          >
          |           
          <a href="tel:+96178986316" class="text-white"><i class="fa-solid fa-phone"></i></a>
        </p>
      </div>
    </footer>

    <style>
      .header {
        position: relative;
        background-image: url("assets/background1.jpeg");
        background-size: cover;
        background-position: center;
        height: 100vh;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
      }
      .header::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
      }
      .header-content {
        position: relative;
        z-index: 1;
      }
      .header-content h1 {
        font-size: 3em;
        margin: 0;
      }
      .welcome-section {
        background-color: #b33c3c;
        padding-top: 60px;
      }
      .welcome-section .lead {
        font-size: 1.25rem;
        color: #555;
      }
      .carousel-item img {
        width: auto;
        max-height: 500px;
      }
      .carousel-control-prev,
      .carousel-control-next {
        width: 45%;
      }

      .carousel-control-prev-icon,
      .carousel-control-next-icon {
        padding: 10px;
      }

      .carousel-inner {
        position: relative;
      }

      .carousel-item img {
        display: block;
        margin: 0 auto;
        max-height: 500px;
      }
      footer {
        position: relative;
        bottom: 0;
        width: 100%;
        background-color: #a42613;
        color: white;
        text-align: center;
        padding: 1rem 0;
      }

      footer a {
        color: #ffc107;
        text-decoration: none;
      }

      footer a:hover {
        color: white;
        text-decoration: underline;
      }
      #home {
        background-color: #b33c3c;
        color: #ffc107;
      }
      #home .lead {
        color: azure;
      }
      #cards {
        padding-top: 25px;
      }
      .card img {
        border-top-left-radius: 1.5%;
        border-top-right-radius: 1.5%;
      }
      #slider .image {
        border-radius: 2%;
      }
      #whatWeDo {
        background-color: #b33c3c;
        color: #ffc107;
      }
      #whatWeDo .lead {
        color: azure;
      }
      #howToHelp {
        background-color: #b33c3c;
        color: #ffc107;
      }
      #howToHelp .lead {
        color: azure;
      }
      .form-control[readonly] {
        background-color: #e9ecef;
        opacity: 1;
      }
      .offcanvas-header {
        background-color: #b33c3c;
        color: #ffc107;
      }
      .offcanvas-body {
        background-color: rgb(37, 51, 79);
        color: azure;
      }
    </style>
    
    <script src="https://kit.fontawesome.com/dfcd077466.js" crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script>
      function getLocation() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition);
        } else {
          alert("Geolocation is not supported by this browser.");
        }
      }

      function showPosition(position) {
        document.getElementById("latitude").value = position.coords.latitude;
        document.getElementById("longitude").value = position.coords.longitude;
      }

      function setCurrentDate() {
        const today = new Date().toISOString().split("T")[0];
        document.getElementById("reportDate").value = today;
      }

      window.onload = function () {
        getLocation();
        setCurrentDate();
      };
    </script>
  </body>
</html>
