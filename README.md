# 🚀 AI SEO Pro - The Ultimate AI-Powered Content Auditor

![Version](https://img.shields.io/badge/version-1.0.0-blue.svg) ![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4.svg) ![License](https://img.shields.io/badge/license-Standard-green.svg)

**AI SEO Pro** is a cutting-edge, lightweight PHP script that leverages the power of **OpenAI GPT-4o** and **Google Gemini 1.5 Flash** to provide instant, professional-grade SEO audits. Designed for content creators, agencies, and developers, it offers real-time scoring, keyword extraction, and actionable optimization suggestions—all within a stunning, responsive dashboard.

---

## ✨ Key Features

- **🧠 Dual AI Intelligence**: Seamlessly switch between **OpenAI GPT-4o** and **Google Gemini 1.5 Flash** for versatile analysis.
- **⚡ Real-Time Content Auditing**: Get an instant **SEO Score (0-100)** with a breakdown of strengths, weaknesses, and actionable suggestions.
- **🔑 Smart Keyword Extraction**: Automatically identifies **Primary Keywords** and valuable **Long-tail Keywords** to boost ranking potential.
- **👀 SERP Preview**: Visualize how your content will appear in Google Search results with dynamic Title & Meta Description optimization.
- **📄 One-Click PDF Reports**: Generate professional, branded PDF audit reports for your clients or team instantly.
- **📊 Interactive Dashboard**: Beautiful, animated gauges and charts for a premium user experience.
- **🛠️ Mock / Demo Mode**: Test the entire UI and flow without spending a cent on API credits.

---

## 🚀 Installation Guide

Getting **AI SEO Pro** up and running is incredibly simple.

### Step 1: Upload Files
Upload the entire project folder to your server.
- **XAMPP/Localhost**: Place the folder in `C:\xampp\htdocs\your-folder-name`.
- **cPanel/Live Server**: Upload to `public_html` via File Manager or FTP.

### Step 2: Access the Application
Open your web browser and navigate to:
```
http://localhost/your-folder-name/
```
*(Or your live domain: `https://yourdomain.com/folder-name/`)*

### Step 3: Configure API Keys
1. Click the **Settings (⚙️)** icon in the sidebar.
2. Enter your **OpenAI API Key** and **Google Gemini API Key**.
3. Click **Save Configuration**.
*(Keys are stored securely in your browser's LocalStorage for privacy).*

---

## 💻 Technical Stack

Built with modern, lightweight technologies for maximum performance and easy customization.

- **Backend**: PHP 8.x (Clean, OOP Architecture)
- **Frontend**: Vanilla JavaScript (ES6+), Tailwind CSS (CDN)
- **Styling**: Modern, responsive design with Glassmorphism effects
- **Connectivity**: cURL for robust API communication

---

## 📂 File Structure Overview

Here’s a look under the hood:

| File | Description |
| :--- | :--- |
| `index.html` | The main dashboard interface. Contains all HTML, CSS, and Client-side JS logic. |
| `AiseoEngine.php` | **The Brain.** A robust PHP class handling API requests, prompts, and JSON parsing for both OpenAI and Gemini. |
| `test_article.php` | The API Endpoint. Handles AJAX requests, manages CORS headers, and triggers the engine. |
| `config.php` | *Optional.* Can be used to hardcode API keys for server-side usage (if not using the frontend settings). |
| `.htaccess` | Server configuration file to handle URL rewriting and authorization headers. |

---

## ⚙️ CORS & Server Configuration

To ensure the "One-Click Audit" works smoothly, your server must allow POST requests. We have included an optimized `.htaccess` file for Apache servers.

**If you face any connection issues:**
1. Ensure `mod_headers` is enabled in your Apache config.
2. The included `.htaccess` automatically handles these headers:
   ```apache
   Header set Access-Control-Allow-Origin "*"
   Header set Access-Control-Allow-Methods "POST, GET, OPTIONS"
   Header set Access-Control-Allow-Headers "Content-Type, Authorization"
   ```

---

## 📄 License & Support

**License:** Standard License (as per marketplace terms).
**Support:** For installation help or bug reports, please contact us via the marketplace profile page.

---

*Made with ❤️ for high-ranking content.*
