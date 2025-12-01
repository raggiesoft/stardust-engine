# The Stardust Engine

This repository contains the source code, creative assets, and narrative history for the fictional 1980s synth-rock band, **The Stardust Engine**.

This project serves two purposes:

1. **Creative:** A deep-lore narrative universe about a family band fighting for artistic freedom.
2. **Technical:** A portfolio piece demonstrating a custom PHP architecture, automated media pipelines, and advanced HTML5 audio integration.
    

## 🎸 The Narrative Universe

The Stardust Engine is a family band, all alumni of Commonwealth Polytechnic Institute (CPI), Class of '89.

- **Ryan O'Connell:** Lead Vocals, Lead Guitar (The "Engine")
- **Cassidy O’Connell:** Lead Vocals, Piano, Synthesizers (The "Stardust")
- **Evan Wright:** Bass Guitar, Rhythm Guitar
- **Tyler Wright:** Drums, Percussion
- **Holly O’Connell:** Manager (CEO of Engine Room Records, LLC)
    

### The Ad Astra Narrative (New Expansion)

The project has evolved beyond historical fiction into high-concept sci-fi. The **Ad Astra** narrative arc reimagines the band not just as musicians, but as the "Launch Control" for the luxury star-cruiser _Aethelgard_.

- **The Concept:** A 15-minute progressive rock suite that doubles as a literal launch sequence for a spaceship.
- **The Lore:** The band performs in "The Monolith Room," a concert hall with a massive observation window facing a nebula.
- **The Sound:** Ryan O'Connell physically yanking his guitar cable to simulate "Main Engine Cut-Off" (MECO) is a canonized technical detail.
    

### AI-Assisted Art Direction

This project leverages generative AI ("Nano Banana" / Gemini) as a virtual art department.

- **Scene Generation:** The "Maiden Voyage" concert image was created by feeding Gemini two disparate assets: the band's logo and a stock nebula image. The AI successfully "stitched" these elements together with a text prompt to render a photorealistic 35mm film shot of the band performing on stage in 1995.
- **Historical Authenticity:** The AI also generated the "Crash of '90" hospital photo, perfectly capturing the grain, lighting, and emotional tone of a personal 90s snapshot.
    

### Fictional Discography

- **1987:** _Electric Color_ (Apex Records)
- **1989:** _Neon Hearts_ (Apex Records)
- **1990:** _Live in Chicago_ (Apex Records)
- **1992:** _Friction_ (CANCELED / Seized Asset)
- **1995:** _The Warehouse Tapes_ (Engine Room Records)
- **1995:** _Ad Astra_ (Single / Mission Log)
- **1997:** _Hard Reset_ (Engine Room Records)
- **2007:** _Lost Sounds_ (Archival Compilation)
- **2015:** _Re-Ignition_ (Reunion Album)
- **2016:** _Live at The Crucible_ (Homecoming Finale)
    

## 🛠️ Technical Architecture

This website is built on a custom, lightweight stack designed for speed, maintainability, and "DRY" (Don't Repeat Yourself) principles.

### 1. The "Elara" Router (v3.3)

The site uses a custom "Smart Router" pattern (`public/index.php`) instead of a heavy framework.

- **Auto-Discovery:** Automatically maps URLs like `/about` to `pages/about.php`.
- **Dynamic Metadata:** Automatically injects OpenGraph (OG) tags for SEO based on the route configuration or page content.
- **Smart Sidebars:** Uses logic patterns to automatically inject the correct sidebar (e.g., Band Sidebar vs. Discography Sidebar) based on the URL path.
    

### 2. The Audio Engine & Media Session API

The site features a custom-built, full-featured audio player (`stardust-player.js`) that rivals native music apps.

- **Media Session API:** Fully integrated with the browser's Media Session API. This allows users to control playback (Play, Pause, Next, Previous, Seek) directly from their **Lock Screen**, **Smartwatch**, or **Keyboard Media Keys**. It also displays high-res album art and metadata in the OS control center.
- **Format Prioritization:** Automatically prioritizes high-quality, open-source **OGG Vorbis** streams, falling back to MP3 only if necessary.
- **Smart State:** Uses `LocalStorage` to remember user preferences for **Shuffle** and **Repeat Modes** (Repeat One, Repeat Album, Repeat All).
- **"Stardust Radio" Console:** A dedicated Single Page Application (SPA) view (`pages/radio.php`) that aggregates the entire discography JSON into a single master playlist for continuous listening.
    

### 3. Asset Management & CDN

To keep the git repository lightweight, **no binary assets** (images, audio, archives) are stored in version control.

- **Storage:** All static assets are hosted on **DigitalOcean Spaces** (S3-compatible).
- **Delivery:** Assets are served via a global CDN with Cross-Origin Resource Sharing (CORS) enabled for AJAX fetching.
- **Cache Busting:** The router and audio engine automatically append version strings (`?v=time`) to critical assets to prevent "Partial Content" (HTTP 206) caching errors during updates.
    

### 4. Automated Media Pipeline (`transcode-all.sh`)

A custom Bash "Factory" script handles all media generation to ensure consistency.

- **Input:** Reads `album.json` and `tracks.json` metadata files and master `.wav` audio.
- **Processing:** Uses `ffmpeg` to transcode master audio into V0 VBR MP3s (with ID3v2.3 tags) and Q9 OGG Vorbis files.
- **Packaging:** Automatically generates `read-me.txt` manifests and zips everything into downloadable archives (`.zip` and `.7z`).
    

### 5. Frontend & Theming

- **Framework:** Bootstrap 5.3 with extensive custom CSS variables.
- **Theme Engine (v2.9):** Implements a robust "Dual Mode" theme system.
    
    - **Stardust Theme:** A WCAG AAA compliant theme that supports both "Cosmic Day" (Light Mode) and "Cosmic Night" (Dark Mode).
    - **Crucible Theme:** A specialized "Homecoming" theme using the maroon and orange colors of the fictional university (CPI).
        
- **Dynamic Lyrics Engine:** A JavaScript-powered parser that fetches raw Markdown files from the CDN and renders them into styled HTML (handling custom headers like `**LORE NOTE:**`) inside a modal, allowing users to read lore while listening without navigating away.
    

## 📜 Licensing

This project operates under a dual-license model:

- **Source Code:** [MIT License](https://opensource.org/license/MIT)
- **Creative Content:** [CC BY-SA 4.0](https://creativecommons.org/licenses/by-sa/4.0/ )