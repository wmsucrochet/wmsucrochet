<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yarn Craft Emporium</title>
    <link rel="icon" type="image/png" href="images/LOGO/LOGO.jpg" />
    <link href="contact.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <div>
        <div class="crochet-co">
          <h1 class="Comname">Yarn Craft Emporium</h1>
        </div>
        <div class="Icons">
          <div class="CA">
            <a href="cart.php">
              <span class="material-icons" style="color: #8b6741"
                >shopping_cart
              </span>
            </a>
            <a href="Login.php">
              <span class="material-icons" style="color: #8b6741">
                account_circle
              </span>
            </a>
          </div>
        </div>
        <div class="Items">
          <nav class="NavBar">
            <ul class="menu-drawer__menu has-submenu list-menu" role="list">
              <li>
                <a
                  href="index.php"
                  class="menu-drawer__menu-item has-submenu"
                  aria-current="page"
                >
                  Home
                </a>
              </li>
              <li class="menu-drawer__menu-item has-submenu">
                <span class="dropdown-btn">
                  Shop
                  <svg
                    viewBox="0 0 14 10"
                    fill="none"
                    aria-hidden="true"
                    focusable="false"
                    role="presentation"
                    class="icon icon-arrow"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z"
                      fill="currentColor"
                    ></path>
                  </svg>
                </span>
                <div
                  class="menu-drawer__submenu has-submenu gradient motion-reduce"
                >
                  <ul class="menu-drawer__menu list-menu" role="list">
                    <li>
                      <a
                        href="product.php"
                        class="menu-drawer__menu-item link link--text list-menu__item"
                        >Shop All</a
                      >
                    </li>
                    <li>
                      <a
                        href="/collections/keychains"
                        class="menu-drawer__menu-item link link--text list-menu__item"
                        >Tops</a
                      >
                    </li>
                    <li>
                      <a
                        href="/collections/desk-friends"
                        class="menu-drawer__menu-item link link--text list-menu__item"
                        >Beanies</a
                      >
                    </li>
                    <li>
                      <a
                        href="/collections/earrings"
                        class="menu-drawer__menu-item link link--text list-menu__item"
                        >Sweatshirts</a
                      >
                    </li>
                    <li>
                      <a
                        href="/collections/keycaps"
                        class="menu-drawer__menu-item link link--text list-menu__item"
                        >Tees</a
                      >
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a
                  href="contact.html"
                  class="menu-drawer__menu-item list-menu__item link link--text"
                  >Contact</a
                >
              </li>
              <li>
                <a
                  href="#shipping-policy"
                  class="menu-drawer__menu-item list-menu__item link link--text"
                  >Shipping Policy</a
                >
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <section class="contact-section">
      <div class="contact-intro">
        <h2 class="contact-title">Message Us</h2>
        <p class="contact-description">
          Fill out the form below and we'll get back to you as soon as possible.
        </p>
      </div>

      <form
        class="contact-form"
        action="https://api.web3forms.com/submit"
        method="POST"
      >
        <input
          type="hidden"
          name="access_key"
          value="e4ecf4ba-e435-43d4-873d-b459e2f0a51f"
        />
        <input
          type="hidden"
          name="subject"
          value="New Contact Form Submission from Web3Forms"
        />
        <input type="hidden" name="from_name" value="Yarn Craft Emporium" />
        <div class="form-group-container">
          <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input
              id="name"
              name="name"
              class="form-input"
              placeholder="Your name"
              type="text"
            />
          </div>
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input
              id="email"
              name="email"
              class="form-input"
              placeholder="Your email"
              type="email"
            />
          </div>

          <div class="form-group">
            <label for="message" class="form-label">Message</label>
            <textarea
              class="form-textarea"
              id="message"
              name="message"
              placeholder="Your message"
            ></textarea>
          </div>
        </div>
        <button class="form-submit" type="submit">Send Message</button>
      </form>
    </section>
    <footer>
      <div class="footer-container">
        <div class="footer-logo">
          <h2>Crochet.Co</h2>
        </div>
        <div class="footer-links">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Shipping Policy</a></li>
          </ul>
        </div>
        <div class="footer-social">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2024 Crochet.Co. All Rights Reserved.</p>
      </div>
    </footer>
  </body>
</html>
