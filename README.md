# The Stardust Engine

This repository contains the source code, creative assets, and narrative history for the fictional 1980s synth-rock band, **The Stardust Engine**.

This project serves two purposes:

1.  **Creative:** A deep-lore narrative universe about a family band fighting for artistic freedom.
2.  **Technical:** A portfolio piece demonstrating a custom PHP architecture, automated media pipelines, and CDN integration.

---

## 🎸 The Narrative Universe

The Stardust Engine is a family band, all alumni of Commonwealth Polytechnic Institute (CPI), Class of '89.

* **Ryan O'Connell:** Lead Vocals, Lead Guitar (The "Engine")
* **Cassidy O’Connell:** Lead Vocals, Piano, Synthesizers (The "Stardust")
* **Evan Wright:** Bass Guitar, Rhythm Guitar
* **Tyler Wright:** Drums, Percussion
* **Holly O’Connell:** Manager (CEO of Engine Room Records, LLC)

### The Story

The band's history is defined by a "cold war" with their label, Apex Records. The studio attempted to market them with reductive "Stardust" (Cassidy's synth-pop) and "Engine" (Ryan's rock) personas, which the band hated.

This conflict culminated in the 1992 _Friction_ album disaster, where a rogue executive made a fatal assumption about the siblings' dynamic. This "nuke" event ultimately freed the band from their contract and allowed them to found their own label, **Engine Room Records, LLC**, funded by their loyal "Forger Nation" fanbase.

### Fictional Discography

* **1987:** _Electric Color_ (Apex Records)
* **1989:** _Neon Hearts_ (Apex Records)
* **1990:** _Live in Chicago_ (Apex Records)
* **1995:** _The Warehouse Tapes_ (Engine Room Records)
* **1997:** _Hard Reset_ (Engine Room Records)
* **2007:** _Lost Sounds_ (Archival Compilation)
* **2015:** _Re-Ignition_ (Reunion Album)
* **2016:** _Live at The Crucible_ (Homecoming Finale)

---

## 🛠️ Technical Architecture

This website is built on a custom, lightweight stack designed for speed, maintainability, and "DRY" (Don't Repeat Yourself) principles.

### 1. The "Elara" Router (v2.9)

The site uses a custom "Smart Router" pattern (`public/index.php`) instead of a heavy framework.

* **Auto-Discovery:** Automatically maps URLs like `/about` to `pages/about.php`.
* **Directory Indexing:** Automatically serves `overview.php` or `home.php` for root directories (e.g., `/discography`).
* **Auto-H1 Titles:** Automatically reads the first `<h1>` tag in a view to generate the `<title>` tag, minimizing config.
* **Smart Sidebars:** Uses logic patterns to automatically inject the correct sidebar (e.g., Band Sidebar vs. Discography Sidebar) based on the URL path.

### 2. Asset Management & CDN

To keep the git repository lightweight, **no binary assets** (images, audio, archives) are stored in version control.

* **Storage:** All static assets are hosted on **DigitalOcean Spaces** (S3-compatible).
* **Delivery:** Assets are served via a global CDN with Cross-Origin Resource Sharing (CORS) enabled for AJAX fetching.
* **Deployment:** The `deploy.sh` (v10) script uses `rclone` (on macOS) or `tar` (on Windows) to sync local assets to the bucket, managing cache headers automatically.

### 3. Automated Media Pipeline (`transcode-all.sh` v11)

A custom Bash "Factory" script handles all media generation to ensure consistency.

* **Input:** Reads `album.json` and `tracks.json` metadata files and master `.wav` audio.
* **Processing:** Uses `ffmpeg` to transcode master audio into V0 VBR MP3s (with ID3v2.3 tags) and Q9 OGG Vorbis files.
* **Packaging:** Automatically generates `read-me.txt` manifests and zips everything into downloadable archives (`.zip` and `.7z`).
* **Lyrics Injection:** Automatically detects `lyrics/` folders and includes Markdown files in the downloadable archives.

### 4. Frontend & Theming

* **Framework:** Bootstrap 5.3 with extensive custom CSS variables.
* **Theme Engine (v2.9):** Implements a robust "Dual Mode" theme system.
    * **Stardust Theme:** A WCAG AAA compliant theme that supports both "Cosmic Day" (Light Mode) and "Cosmic Night" (Dark Mode).
    * **Crucible Theme:** A specialized "Homecoming" theme using the maroon and orange colors of the fictional university (CPI).
* **Interactive Components:**
    * **Lyrics & Lore:** A JavaScript-powered modal that fetches Markdown lyrics from the CDN on-demand and parses them into styled HTML.
    * **Content Gates:** JavaScript-based warnings for sensitive narrative content.

---

## 📜 Licensing

This project operates under a dual-license model:

* **Source Code:** [MIT License](LICENSE)
* **Creative Content:** [CC BY-SA 4.0](https://creativecommons.org/licenses/by-sa/4.0/) _(Includes all narrative text, fictional history, lyrics, AI-generated music, and artwork)_