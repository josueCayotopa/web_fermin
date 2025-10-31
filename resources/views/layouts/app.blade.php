<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Fermín Silva - Oftalmólogo Especialista</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1a365d', // Azul marino profundo - Color principal
                        secondary: '#2c5282', // Azul medio - Color secundario
                        accent: '#c19a6b', // Dorado/beige elegante - Acentos
                    }
                    , animation: {
                        'bounce-slow': 'bounce 2s infinite'
                    , }
                }
            }
        }

    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        .animate-fade-in {
            animation: fadeIn 0.7s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Video hover effect */
        .video-card:hover .play-button {
            transform: scale(1.2);
        }

        .video-overlay {
            background: linear-gradient(to top, rgba(26, 54, 93, 0.9), transparent);
        }

    </style>
</head>

<body class="font-sans bg-gray-50 text-gray-900">

    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 bg-white/95 backdrop-blur-sm shadow-sm z-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex items-center gap-2">
                    <img src="/images/facoadiccion-logo.jpg?height=&width=40" alt="Logo Dr. Fermín Silva" class="h-20 w-40">
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-6">
                    <a href="#inicio" class="text-gray-700 hover:text-primary transition-colors">Inicio</a>
                    <a href="#sobre-mi" class="text-gray-700 hover:text-primary transition-colors">Historia</a>
                    <a href="#estudios-medicos" class="text-gray-700 hover:text-primary transition-colors">Formación Médica</a>
                    <a href="#estudios-gerenciales" class="text-gray-700 hover:text-primary transition-colors">Formación Empresarial</a>
                    <a href="#personalidades" class="text-gray-700 hover:text-primary transition-colors">Famosos</a>
                    <a href="#testimonios" class="text-gray-700 hover:text-primary transition-colors">Testimonios</a>
                    <a href="https://laluzeduca.clinicalaluz.com.pe/" class="text-gray-700 hover:text-primary transition-colors">La Luz Educa</a>
                    <a href="https://facoadiccion.pe/" class="text-gray-700 hover:text-primary transition-colors">Facoadicción 2026</a>
                    <a href="#contacto" class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-secondary transition-colors">Contacto</a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-gray-700">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <div class="flex flex-col gap-3">
                    <a href="#inicio" class="text-gray-700 hover:text-primary transition-colors py-2">Inicio</a>
                    <a href="#sobre-mi" class="text-gray-700 hover:text-primary transition-colors py-2">Historia</a>
                    <a href="#estudios-medicos" class="text-gray-700 hover:text-primary transition-colors py-2">Formación Médica</a>
                    <a href="#estudios-gerenciales" class="text-gray-700 hover:text-primary transition-colors py-2">Formación Empresarial</a>
                    <a href="#videos" class="text-gray-700 hover:text-primary transition-colors py-2">Cirugías</a>
                    <a href="#testimonios" class="text-gray-700 hover:text-primary transition-colors py-2">Testimonios</a>
                    <a href="https://laluzeduca.clinicalaluz.com.pe/" class="text-gray-700 hover:text-primary transition-colors py-2">La Luz Educa</a>
                    <a href="https://facoadiccion.pe/" class="text-gray-700 hover:text-primary transition-colors py-2">Facoadicción 2026</a>
                    <a href="#contacto" class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-secondary transition-colors text-center">Contacto</a>
                </div>
            </div>
        </div>
    </nav>



    <!-- Mobile Menu Script -->
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', function() {
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });

    </script>
</body>
</html>
