<?php
        // ===================================================================
        // RESOURCE MANIFEST GENERATOR (v2.2)
        // ===================================================================
        
        // 1. Resolve Context
        $site  = $currentSite ?? 'stardust-engine';
        $theme = $currentPageTheme ?? null;
        
        $cdn_root = "https://assets.raggiesoft.com";
        
        // PATH DEFINITIONS
        // A. Core Framework (New Path)
        // This replaces the old bootstrap-base.css
        $path_bootstrap = $cdn_root . "/common/css/bootstrap/bootstrap.css";

        // B. Common Overrides (Headers, Footers, Patches)
        $path_common = $cdn_root . "/common/css/bootstrap-common"; 
        
        // 2. Determine Theme Path
        if ($site === 'corporate') {
            $path_theme = $cdn_root . "/common/css/raggiesoft-corporate";
        } elseif ($theme && $theme !== $site) { 
            // Only treat as a sub-theme if it DOESN'T match the site name
            $path_theme = $cdn_root . "/{$site}/css/bootstrap/{$theme}";
        } else {
            // Default Path (Root of bootstrap folder)
            $path_theme = $cdn_root . "/{$site}/css/bootstrap";
        }

        // 3. Build Queue
        $load_queue = [];
        
        // STEP A: Load Core Framework (Bootstrap 5)
        $load_queue[] = [
            'type' => 'css', 
            'url'  => $path_bootstrap . '?v=' . time(), 
            'name' => 'Core Framework'
        ];
        
        // STEP B: CSS Modules (Theme Layers)
        $css_modules = [
            // 'bootstrap-base.css' REMOVED - Loaded explicitly above
            ['file' => 'root.css',             'source' => 'theme',  'name' => 'Theme Variables'],
            ['file' => 'extras.css',           'source' => 'theme',  'name' => 'Visual FX Engine'],
            ['file' => 'bootstrap-header.css', 'source' => 'common', 'name' => 'Nav Systems'],
            ['file' => 'bootstrap-footer.css', 'source' => 'common', 'name' => 'Player Interface'],
            ['file' => 'safety-net.css',       'source' => 'theme',  'name' => 'Safety Overrides'],
            ['file' => 'raggiesoft-extras.css','source' => 'common', 'name' => 'Global Patches']
        ];

        foreach ($css_modules as $m) {
            $base = ($m['source'] === 'common') ? $path_common : $path_theme;
            $load_queue[] = [
                'type' => 'css',
                'url'  => $base . '/' . $m['file'] . '?v=' . time(),
                'name' => $m['name']
            ];
        }

        // STEP C: Critical Images (Preload)
        $critical_images = [
            'System Logo' => 'https://assets.raggiesoft.com/stardust-engine/images/stardust-engine-logo.png'
        ];

        if (isset($customPageAssets) && is_array($customPageAssets)) {
            $critical_images = array_merge($critical_images, $customPageAssets);
        }

        foreach ($critical_images as $name => $url) {
            $load_queue[] = [
                'type' => 'image',
                'url'  => $url,
                'name' => $name
            ];
        }
    ?>