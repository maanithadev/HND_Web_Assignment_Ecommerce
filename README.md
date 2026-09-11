# Lakshan Flora - E-Commerce Website 🌸

**Lakshan Flora** is a fully functional, responsive front-end e-commerce web application designed for a premium floral shop. It allows customers to browse floral arrangements, view galleries, learn about the services offered, and seamlessly add items to their shopping cart and checkout. 

This project was built focusing on modern design principles, user experience, and responsive layout techniques to ensure it looks stunning on all devices.

## 🌟 Key Features

* **Responsive Design:** Fully responsive layout built with **Bootstrap 5.3.3**, ensuring optimal viewing across mobile, tablet, and desktop devices.
* **Shopping Cart Functionality:** Dynamic, client-side shopping cart implemented using JavaScript. Users can add products to the cart, adjust quantities, and proceed to checkout.
* **Interactive UI Elements:** Clean and modern interface with dynamic cart updates, hover effects, and a smooth user experience.
* **Multi-Page Architecture:**
  * `Home` - Engaging landing page with hero section, features, and recent events gallery.
  * `About Us` - Information about the Lakshan Flora brand.
  * `Services` - Detailed descriptions of the floral services offered (weddings, custom events, etc.).
  * `Gallery` - Masonry-style photo gallery showcasing past work.
  * `Customer Testimonials` - Reviews and feedback from past clients.
  * `Contact` - Contact form integrated with PHP (`send_email.php`) for seamless communication.
  * `Checkout` - Dedicated checkout page for reviewing the cart and finalizing orders.
* **SEO Optimized:** Basic schema markup and semantic HTML5 for better search engine visibility.

## 🛠️ Technologies Used

* **Frontend:** HTML5, CSS3 (Vanilla), JavaScript (ES6+)
* **Framework:** Bootstrap 5.3.3
* **Backend:** PHP (for handling contact and checkout email submissions)
* **Data Management:** JSON (`product.json`) for product catalog management.

## 🚀 Getting Started

To get a local copy up and running, follow these simple steps.

### Prerequisites

To fully test all the features (especially the dynamic cart and fetching JSON data), it is highly recommended to run this project through a local development server.

* A code editor like [Visual Studio Code](https://code.visualstudio.com/)
* [Live Server Extension](https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer) for VS Code.

### Installation & Execution

1. **Clone the repository** (if applicable) or download the source code files.
2. **Open the project folder** in Visual Studio Code.
3. **Start Live Server:** Right-click on the `index.html` file and select **"Open with Live Server"**.
4. The website will automatically open in your default web browser at `http://127.0.0.1:5500/index.html`.

> [!WARNING]
> **Important Note:** Please be sure to run the website through a local server (like Live Server). Opening the HTML files directly from the file system (e.g., `file://.../index.html`) will cause Cross-Origin Resource Sharing (CORS) errors when the JavaScript attempts to fetch `product.json`, and the shopping cart will not function correctly.
