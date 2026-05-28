<?php
// Custom Shortcode til Donkey Power Footer
function register_donkey_power_footer() {
    return '
    <div class="dp-footer">
        <div class="dp-footer-container">
            
            <div class="dp-footer-col">
                <h2 class="dp-footer-title">Donkey Power</h2>
                <p><a href="#" class="dp-footer-link">Tilmeld nyhedsbrev</a></p>
            </div>

            <div class="dp-footer-col">
                <h3 class="dp-footer-title">Adresse</h3>
                <p class="dp-footer-text">Innovatorium</p>
                <p class="dp-footer-text">Birk Centerpark 40</p>
                <p class="dp-footer-text">7400 Herning</p>
                <a href="#" class="dp-footer-link">Find vej</a>
            </div>

            <div class="dp-footer-col">
                <h3 class="dp-footer-title">Adresse</h3>
                <p class="dp-footer-text">INCUBA Katrinebjerg</p>
                <p class="dp-footer-text">Åbogade 15</p>
                <p class="dp-footer-text">8200 Aarhus N</p>
                <a href="#" class="dp-footer-link">Find vej</a>
            </div>

            <div class="dp-footer-col">
                <h3 class="dp-footer-title">Adresse</h3>
                <p class="dp-footer-text">SOHO</p>
                <p class="dp-footer-text">Flæsketorvet 68</p>
                <p class="dp-footer-text">1711 København V</p>
                <a href="#" class="dp-footer-link">Find vej</a>
            </div>

            <div class="dp-footer-col">
                <h3 class="dp-footer-title">Kontakt</h3>
                <p class="dp-footer-text">T: +45 69 16 30 90</p>
                <p class="dp-footer-text" style="margin-top: 10px;">E: hello@donkeypower.dk</p>
                <p class="dp-footer-text" style="margin-top: 10px;">CVR: 42575143</p>
                
                <a href="#" class="dp-footer-social" aria-label="LinkedIn">
                    <svg viewBox="0 0 24 24">
                        <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
    ';
}
add_shortcode('custom_dp_footer', 'register_donkey_power_footer');