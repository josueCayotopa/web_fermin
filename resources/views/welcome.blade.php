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
                        primary: '#1a365d',      // Azul marino profundo - Color principal
                        secondary: '#2c5282',    // Azul medio - Color secundario
                        accent: '#c19a6b',       // Dorado/beige elegante - Acentos
                    },
                    animation: {
                        'bounce-slow': 'bounce 2s infinite',
                    }
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
                    <a href="#videos" class="text-gray-700 hover:text-primary transition-colors">Cirugías</a>
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

    <!-- Hero Section -->
    <section id="inicio" class="relative min-h-screen flex items-center justify-center bg-white text-gray-900 overflow-hidden pt-16">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-20 left-10 w-64 h-64 border-2 border-primary rounded-full"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 border-2 border-secondary rounded-full"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-accent rounded-full"></div>
        </div>

        <div class="container mx-auto px-4 lg:px-8 relative z-10 py-12">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Column - foto de fermin -->
                    <div class="order-2 lg:order-1 animate-fade-in">
                        <div class="relative">
                            <!-- Main Photo -->
                            <div class="relative aspect-[3/4] max-w-md mx-auto lg:mx-0  overflow-hidden sh">
                                <img src="/images/doctor-fermin.jpg?height=800&width=600" 
                                     alt="Dr. Fermín Silva" 
                                     class="w-full h-full object-cover">
                            </div>
                            
                            <!-- Redes sociales -->
                            <div class="absolute -bottom-8 left-1/2 -translate-x-1/2 flex gap-4 bg-white rounded-full px-10 py-6 shadow-2xl border-2 border-gray-100">
                                <a href="https://www.instagram.com/dr.ferminsilva/" class="w-20 h-20 bg-gradient-to-br from-pink-500 to-purple-600 rounded-full flex items-center justify-center hover:scale-110 transition-all shadow-lg" aria-label="Instagram">
                                    <i class="fab fa-instagram text-white text-4xl"></i>
                                </a>
                                <a href="https://www.youtube.com/@ferminsilvaperu" class="w-20 h-20 bg-gradient-to-br from-red-600 to-red-700 rounded-full flex items-center justify-center hover:scale-110 transition-all shadow-lg" aria-label="YouTube">
                                    <i class="fab fa-youtube text-white text-4xl"></i>
                                </a>
                                <a href="https://www.tiktok.com/@drferminsilva/" class="w-20 h-20 bg-gradient-to-br from-black to-gray-800 rounded-full flex items-center justify-center hover:scale-110 transition-all shadow-lg" aria-label="TikTok">
                                    <i class="fab fa-tiktok text-white text-4xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Content -->
                    <div class="order-1 lg:order-2 text-center lg:text-left animate-fade-in">
                        <div class="inline-flex items-center gap-2 px-4 py-2 bg-accent/10 rounded-full mb-6 border border-accent/20">
                            <i class="fas fa-award text-accent"></i>
                            <span class="text-sm font-medium text-accent">Liderazgo en Oftalmología</span>
                        </div>

                        <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight text-primary">
                        Fermin Silva
                        </h1>

                        <p class="text-2xl md:text-3xl text-secondary font-semibold mb-4">
                            Cirujano Oftalmólogo Subespecialista
                        </p>
                        <p class="text-lg md:text-xl text-gray-700 mb-4 leading-relaxed">
                            Fundador del departamento de capacitación, docencia e investigación de la Clínica La Luz en el 2012
                        </p>
                        <p class="text-lg md:text-xl text-gray-700 mb-4 leading-relaxed">
                            Subespecialista de Segmento Anterior, Córnea y Cirugía Refractiva
                        </p>
                        <p class="text-lg md:text-xl text-gray-700 mb-4 leading-relaxed">
                            Subespecialista en Córnea y Cirugía Refractiva
                        </p>
                        <p class="text-lg md:text-xl text-gray-700 mb-4 leading-relaxed">
                            Profesor de fellowship de Segmento anterior, Córnea y Cirugía Refractiva
                        </p>
                        <p class="text-lg md:text-xl text-gray-700 mb-4 leading-relaxed">
                            Profesor de cirugía experimental de trasplantes de córnea totales y lamelares en ojos de cerdo: : PKP, DSAEK, DMEK, DALK
                        </p>
                        <p class="text-base md:text-lg text-gray-700 mb-8 leading-relaxed">
                            Fundador de Grupo Empresarial La Luz
                        </p>

                        <!-- CTAs -->
                        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start items-center mb-8">
                            <a href="https://laluzeduca.clinicalaluz.com.pe/" class="bg-primary text-white px-8 py-4 rounded-lg hover:bg-secondary transition-all hover:scale-105 min-w-[220px] text-center font-semibold shadow-lg">
                                <i class="fas fa-chalkboard-teacher mr-2"></i>
                                Oferta Académica 
                            </a>
                            <a href="#sobre-mi" class="border-2 border-primary text-primary px-8 py-4 rounded-lg hover:bg-primary hover:text-white transition-all hover:scale-105 min-w-[220px] text-center font-semibold">
                                <i class="fas fa-user-md mr-2"></i>
                                Conocer Más
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Key Highlights -->
                <div class="py-20 bg-gradient-to-b from-white to-gray-50">
                    <div class="container mx-auto px-4">
                        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                            <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border-2 border-transparent hover:border-accent">
                                <div class="absolute inset-0 bg-gradient-to-br from-accent/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <div class="relative z-10">
                                    <div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-gradient-to-br from-primary to-secondary flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                                        <i class="fas fa-chalkboard-teacher text-3xl text-white"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-primary mb-4 text-center group-hover:text-secondary transition-colors duration-300">
                                        Capacitación Continua
                                    </h3>
                                    <p class="text-gray-600 text-center leading-relaxed">
                                        Compromiso permanente con la educación médica de excelencia.
                                    </p>
                                </div>
                            </div>

                            <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border-2 border-transparent hover:border-accent">
                                <div class="absolute inset-0 bg-gradient-to-br from-accent/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <div class="relative z-10">
                                    <div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-gradient-to-br from-accent to-[#a67c52] flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                                        <i class="fas fa-heart text-3xl text-white"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-primary mb-4 text-center group-hover:text-accent transition-colors duration-300">
                                        Mi prioridad son mis pacientes
                                    </h3>
                                    <p class="text-gray-600 text-center leading-relaxed">
                                        Atención centrada en el bienestar de cada paciente y en el desarrollo profesional de nuestro equipo.
                                    </p>
                                </div>
                            </div>

                            <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border-2 border-transparent hover:border-secondary">
                                <div class="absolute inset-0 bg-gradient-to-br from-secondary/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <div class="relative z-10">
                                    <div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-gradient-to-br from-secondary to-primary flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                                        <i class="fas fa-award text-3xl text-white"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-primary mb-4 text-center group-hover:text-secondary transition-colors duration-300">
                                        Dedicación
                                    </h3>
                                    <p class="text-gray-600 text-center leading-relaxed">
                                        Más de 25    años de trayectoria dedicados a la innovación quirúrgica y al avance de la oftalmología.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce-slow">
            <div class="w-6 h-10 border-2 border-gray-300 rounded-full flex items-start justify-center p-2">
                <div class="w-1 h-3 bg-gray-400 rounded-full"></div>
            </div>
        </div>
    </section>

    <!-- Sección de Redes Sociales -->
    <section class="py-20 bg-white border-b border-gray-200">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-5xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4">Sígueme en Redes Sociales</h2>
                <p class="text-xl text-gray-600 mb-12">
                    Mantente actualizado con las últimas novedades, conferencias y contenido educativo
                </p>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <a href="https://www.instagram.com/dr.ferminsilva/" class="group flex flex-col items-center gap-6 p-8 bg-gradient-to-br from-pink-50 to-purple-50 rounded-3xl hover:shadow-2xl transition-all hover:scale-105 border-2 border-transparent hover:border-pink-200">
                        <div class="w-28 h-28 bg-gradient-to-br from-pink-500 to-purple-600 rounded-full flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform">
                            <i class="fab fa-instagram text-white text-5xl"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800 text-xl mb-1">Instagram</p>
                            <p class="text-base text-gray-600">@drferminsilva</p>
                        </div>
                    </a>
                    
                    <a href="https://www.youtube.com/@ferminsilvaperu" class="group flex flex-col items-center gap-6 p-8 bg-gradient-to-br from-red-50 to-red-100 rounded-3xl hover:shadow-2xl transition-all hover:scale-105 border-2 border-transparent hover:border-red-200">
                        <div class="w-28 h-28 bg-gradient-to-br from-red-600 to-red-700 rounded-full flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform">
                            <i class="fab fa-youtube text-white text-5xl"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800 text-xl mb-1">YouTube</p>
                            <p class="text-base text-gray-600">Dr. Fermín Silva</p>
                        </div>
                    </a>
                    
                    <a href="https://www.tiktok.com/@drferminsilva/" class="group flex flex-col items-center gap-6 p-8 bg-gradient-to-br from-gray-50 to-gray-100 rounded-3xl hover:shadow-2xl transition-all hover:scale-105 border-2 border-transparent hover:border-gray-300">
                        <div class="w-28 h-28 bg-gradient-to-br from-black to-gray-800 rounded-full flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform">
                            <i class="fab fa-tiktok text-white text-5xl"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800 text-xl mb-1">TikTok</p>
                            <p class="text-base text-gray-600">@drferminsilva</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Sobre Mi -->
    <section id="sobre-mi" class="py-24 bg-gradient-to-b from-white to-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4">Dr. Fermín Silva</h2>
                    <div class="w-24 h-1 bg-accent mx-auto mb-6"></div>
                </div>

                <div class="grid lg:grid-cols-2 gap-12 items-start mb-16">
                    <div class="relative">
                        <div class="aspect-[4/5] bg-gradient-to-br from-primary to-secondary rounded-2xl overflow-hidden shadow-2xl">
                            <img src="/images/operando1.jpg?height=600&width=480" 
                                 alt="Dr. Fermín Silva" 
                                 class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-6 -right-6 bg-accent text-white rounded-2xl p-6 shadow-xl">
                            <div class="text-center">
                                <div class="text-4xl font-bold">25+</div>
                                <div class="text-sm font-semibold">Años de</div>
                                <div class="text-sm font-semibold">Experiencia</div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-accent">
                            <p class="text-lg text-gray-700 leading-relaxed">
                                <span class="font-bold text-accent">Subespecialista en Segmento Anterior, Córnea y Cirugía Refractiva</span> con 25 años de experiencia. Empresario de la salud que ha demostrado que se pueden lograr grandes cosas con vocación de servicio y responsabilidad social.
                            </p>
                        </div>

                        <div class="grid grid-cols-3 gap-4">
                            <div class="bg-white rounded-xl p-4 shadow-md text-center border-t-4 border-accent hover:shadow-xl transition-shadow">
                                <div class="text-3xl font-bold text-accent mb-1">8</div>
                                <div class="text-sm text-gray-600 font-semibold">Sedes en Perú</div>
                            </div>
                            <div class="bg-white rounded-xl p-4 shadow-md text-center border-t-4 border-secondary hover:shadow-xl transition-shadow">
                                <div class="text-3xl font-bold text-secondary mb-1">3</div>
                                <div class="text-sm text-gray-600 font-semibold">Programas de Fellowship</div>
                            </div>
                            <div class="bg-white rounded-xl p-4 shadow-md text-center border-t-4 border-primary hover:shadow-xl transition-shadow">
                                <div class="text-3xl font-bold text-primary mb-1">50+</div>
                                <div class="text-sm text-gray-600 font-semibold">Fellows Formados</div>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-primary to-secondary rounded-xl p-6 shadow-lg text-white">
                            <div class="flex items-start gap-4">
                                <div class="bg-white/20 rounded-lg p-3 flex-shrink-0">
                                    <i class="fas fa-lightbulb text-2xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl mb-2">Visión Empresarial</h3>
                                    <p class="text-white/90 leading-relaxed">
                                        Estoy convencido que todos los peruanos tenemos derecho a un servicio de salud de calidad. Por esa razón, hemos descentralizado nuestros servicios de alta especialización.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-secondary to-primary rounded-xl p-6 shadow-lg text-white">
                            <div class="flex items-start gap-4">
                                <div class="bg-white/20 rounded-lg p-3 flex-shrink-0">
                                    <i class="fas fa-heart text-2xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl mb-2">Compromiso con la Responsabilidad Social</h3>
                                    <p class="text-white/90 leading-relaxed">
                                        Clínica La Luz fue creada con el propósito de mejorar la calidad de vida de las personas: Para nuestros pacientes entregando un servicio de calidad y para nuestros colaboradores acompañado en su desarrollo personal y Hemos creado el Premio La Luz para reconocer,  valorar y premiar la dedicación y desarrollo de alta competitividad de las personas en las diferentes áreas


                                    </p>
                                  


                                    <div class="mt-4">
                                        <a href="https://www.youtube.com/watch?v=aAt9B2Pgkdg" class="inline-block bg-white text-primary px-6 py-2 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                                            <i class="fas fa-play mr-2"></i> Ver Video del Premio La Luz
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-16">
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="group bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-accent">
                            <div class="bg-gradient-to-br from-accent to-[#a67c52] w-16 h-16 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                <i class="fas fa-user-md text-2xl text-white"></i>
                            </div>
                            <h4 class="font-bold text-lg text-primary mb-2">Residentados Médicos</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Convenio con la Universidad Nacional Federico Villarreal para la formación de nuevos oftalmólogos
                            </p>
                        </div>

                        <div class="group bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-secondary">
                            <div class="bg-gradient-to-br from-secondary to-primary w-16 h-16 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                <i class="fas fa-graduation-cap text-2xl text-white"></i>
                            </div>
                            <h4 class="font-bold text-lg text-primary mb-2">4 Programas de Fellowship</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Segmento Anterior, Córnea y Cirugía Refractiva • Glaucoma • Retina y Vítreo
                            </p>
                        </div>

                        <div class="group bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-primary">
                            <div class="bg-gradient-to-br from-primary to-secondary w-16 h-16 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                <i class="fas fa-trophy text-2xl text-white"></i>
                            </div>
                            <h4 class="font-bold text-lg text-primary mb-2">Premio La Luz</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Reconocimiento a los primeros puestos de medicina en universidades estatales del Perú
                            </p>
                        </div>

                        <div class="group bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-accent">
                            <div class="bg-gradient-to-br from-accent to-[#a67c52] w-16 h-16 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                <i class="fas fa-heart text-2xl text-white"></i>
                            </div>
                            <h4 class="font-bold text-lg text-primary mb-2">Luz para tus Ojos</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Atención gratuita para personas mayores de 50 años con disminución de agudeza visual
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-primary via-secondary to-accent rounded-2xl p-8 md:p-12 shadow-2xl text-white">
                    <div class="text-center mb-10">
                        <h3 class="text-3xl md:text-4xl font-bold mb-4">Descentralización de Servicios de Alta Especialización</h3>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 hover:bg-white/20 transition-all">
                            <div class="flex items-center gap-3 mb-3">
                                <i class="fas fa-map-marker-alt text-2xl text-accent"></i>
                                <h4 class="font-bold text-xl">Chiclayo</h4>
                            </div>
                            <p class="text-white/80 text-sm">Centro de alta especialización en el norte del Perú</p>
                        </div>

                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 hover:bg-white/20 transition-all">
                            <div class="flex items-center gap-3 mb-3">
                                <i class="fas fa-map-marker-alt text-2xl text-accent"></i>
                                <h4 class="font-bold text-xl">Tacna</h4>
                            </div>
                            <p class="text-white/80 text-sm">Servicios especializados en el sur del país</p>
                        </div>

                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 hover:bg-white/20 transition-all">
                            <div class="flex items-center gap-3 mb-3">
                                <i class="fas fa-map-marker-alt text-2xl text-accent"></i>
                                <h4 class="font-bold text-xl">Jaén</h4>
                            </div>
                            <p class="text-white/80 text-sm">Atención oftalmológica de excelencia en la selva</p>
                        </div>

                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 hover:bg-white/20 transition-all relative overflow-hidden">
                            <div class="absolute top-2 right-2 bg-accent text-white text-xs font-bold px-3 py-1 rounded-full">
                                Próximamente
                            </div>
                            <div class="flex items-center gap-3 mb-3">
                                <i class="fas fa-map-marker-alt text-2xl text-accent"></i>
                                <h4 class="font-bold text-xl">Cajamarca</h4>
                            </div>
                            <p class="text-white/80 text-sm">Inauguración en diciembre 2025</p>
                        </div>
                    </div>

                    <div class="mt-8 text-center">
                        <div class="inline-block bg-white/20 backdrop-blur-sm rounded-full px-8 py-4 border border-white/30">
                            <span class="text-4xl font-bold">8 Sedes</span>
                            <span class="text-white/80 ml-2">en todo el Perú</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Formación Médica -->
    <section id="estudios-medicos" class="py-24 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4">Formación Médica</h2>
                    <div class="w-24 h-1 bg-accent mx-auto mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Trayectoria académica especializada en oftalmología y subespecialidades
                    </p>
                </div>

                <div class="relative">
                    <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-accent via-secondary to-primary"></div>

                    <div class="space-y-12">
                        <div class="relative">
                            <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                                <div class="md:text-right mb-4 md:mb-0">
                                    <div class="inline-block md:block">
                                        <div class="bg-gradient-to-br from-accent to-[#a67c52] text-white rounded-xl p-6 shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
                                            <div class="flex md:flex-row-reverse items-start gap-4">
                                                <div class="bg-white/20 rounded-lg p-3 flex-shrink-0">
                                                    <i class="fas fa-user-md text-3xl"></i>
                                                </div>
                                                <div class="text-left md:text-right">
                                                    <h3 class="text-2xl font-bold mb-2">Médico Cirujano</h3>
                                                    <p class="text-white/90 font-semibold mb-1">Universidad Nacional Federico Villarreal</p>
                                                    <p class="text-white/70 text-sm">Lima, Perú</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden md:block"></div>
                            </div>
                            <div class="hidden md:block absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 w-6 h-6 bg-accent rounded-full border-4 border-white shadow-lg"></div>
                        </div>

                        <div class="relative">
                            <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                                <div class="hidden md:block"></div>
                                <div class="mb-4 md:mb-0">
                                    <div class="bg-gradient-to-br from-secondary to-primary text-white rounded-xl p-6 shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
                                        <div class="flex items-start gap-4">
                                            <div class="bg-white/20 rounded-lg p-3 flex-shrink-0">
                                                <i class="fas fa-hospital text-3xl"></i>
                                            </div>
                                            <div>
                                                <h3 class="text-2xl font-bold mb-2">Residentado Médico en Oftalmología</h3>
                                                <p class="text-white/90 font-semibold mb-1">Hospital Regional Hipólito Unanue</p>
                                                <p class="text-white/70 text-sm">Lima, Perú</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden md:block absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 w-6 h-6 bg-secondary rounded-full border-4 border-white shadow-lg"></div>
                        </div>

                        <div class="relative">
                            <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                                <div class="md:text-right mb-4 md:mb-0">
                                    <div class="inline-block md:block">
                                        <div class="bg-gradient-to-br from-primary to-secondary text-white rounded-xl p-6 shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
                                            <div class="flex md:flex-row-reverse items-start gap-4">
                                                <div class="bg-white/20 rounded-lg p-3 flex-shrink-0">
                                                    <i class="fas fa-microscope text-3xl"></i>
                                                </div>
                                                <div class="text-left md:text-right">
                                                    <h3 class="text-2xl font-bold mb-2">Subespecialista en Segmento Anterior</h3>
                                                    <p class="text-white/90 font-semibold mb-1">Fellowship No Escolarizado</p>
                                                    <p class="text-white/70 text-sm">Con el Prof. Edgar Molina Castañeda</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden md:block"></div>
                            </div>
                            <div class="hidden md:block absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 w-6 h-6 bg-primary rounded-full border-4 border-white shadow-lg"></div>
                        </div>

                        <div class="relative">
                            <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                                <div class="hidden md:block"></div>
                                <div class="mb-4 md:mb-0">
                                    <div class="bg-gradient-to-br from-accent to-[#a67c52] text-white rounded-xl p-6 shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
                                        <div class="flex items-start gap-4">
                                            <div class="bg-white/20 rounded-lg p-3 flex-shrink-0">
                                                <i class="fas fa-eye text-3xl"></i>
                                            </div>
                                            <div>
                                                <h3 class="text-2xl font-bold mb-2">Subespecialista en Córnea y Cirugía Refractiva</h3>
                                                <p class="text-white/90 font-semibold mb-1">Universidad César Vallejo</p>
                                                <p class="text-white/70 text-sm">Lima, Perú</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden md:block absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 w-6 h-6 bg-accent rounded-full border-4 border-white shadow-lg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Formación Empresarial -->
    <section id="estudios-gerenciales" class="py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4">Formación Empresarial</h2>
                    <div class="w-24 h-1 bg-accent mx-auto mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Capacitación continua en gestión empresarial y liderazgo estratégico
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-transparent hover:border-accent overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-accent/10 to-transparent rounded-bl-full"></div>
                        <div class="relative z-10">
                            <div class="flex items-start gap-4 mb-4">
                                <div class="bg-gradient-to-br from-accent to-[#a67c52] w-16 h-16 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                    <i class="fas fa-chart-line text-2xl text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-primary mb-1">Diplomado en Finanzas Corporativas</h3>
                                    <p class="text-accent font-semibold text-lg">Universidad de Lima</p>
                                    <p class="text-gray-600 text-sm">Lima, Perú</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                Especialización en finanzas corporativas para profesionales de la salud y empresarios.
                            </p>
                        </div>
                    </div>

                    <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-transparent hover:border-primary overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-primary/10 to-transparent rounded-bl-full"></div>
                        <div class="relative z-10">
                            <div class="flex items-start gap-4 mb-4">
                                <div class="bg-gradient-to-br from-primary to-secondary w-16 h-16 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                    <i class="fas fa-briefcase text-2xl text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-primary mb-1">PADE Propietarios de Empresas</h3>
                                    <p class="text-primary font-semibold text-lg">Universidad de Piura</p>
                                    <p class="text-gray-600 text-sm">Piura, Perú</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                Programa de Alta Dirección para propietarios y directivos de empresas familiares.
                            </p>
                        </div>
                    </div>

                    <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-transparent hover:border-secondary overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-secondary/10 to-transparent rounded-bl-full"></div>
                        <div class="relative z-10">
                            <div class="flex items-start gap-4 mb-4">
                                <div class="bg-gradient-to-br from-secondary to-primary w-16 h-16 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                    <i class="fas fa-project-diagram text-2xl text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-primary mb-1">Program Management Senior</h3>
                                    <p class="text-secondary font-semibold text-lg">Centrum PUCP</p>
                                    <p class="text-gray-600 text-sm">Madrid, España</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                Programa avanzado en gestión de proyectos y dirección estratégica de programas empresariales.
                            </p>
                        </div>
                    </div>

                    <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-transparent hover:border-accent overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-accent/10 to-transparent rounded-bl-full"></div>
                        <div class="relative z-10">
                            <div class="flex items-start gap-4 mb-4">
                                <div class="bg-gradient-to-br from-accent to-[#a67c52] w-16 h-16 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                    <i class="fas fa-graduation-cap text-2xl text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-primary mb-1">MBA</h3>
                                    <p class="text-accent font-semibold text-lg">Universidad del Pacífico</p>
                                    <p class="text-gray-600 text-sm">Lima, Perú</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                Maestría en Administración de Empresas enfocada en gestión estratégica y liderazgo empresarial.
                            </p>
                        </div>
                    </div>

                    <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-transparent hover:border-primary overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-primary/10 to-transparent rounded-bl-full"></div>
                        <div class="relative z-10">
                            <div class="flex items-start gap-4 mb-4">
                                <div class="bg-gradient-to-br from-primary to-secondary w-16 h-16 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                    <i class="fas fa-laptop-medical text-2xl text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-primary mb-1">Transformación Digital en Salud</h3>
                                    <p class="text-primary font-semibold text-lg">Universidad de Harvard</p>
                                    <p class="text-gray-600 text-sm">Estados Unidos</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                Curso especializado en transformación digital en servicios de salud.
                            </p>
                        </div>
                    </div>

                    <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-transparent hover:border-secondary overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-secondary/10 to-transparent rounded-bl-full"></div>
                        <div class="relative z-10">
                            <div class="flex items-start gap-4 mb-4">
                                <div class="bg-gradient-to-br from-secondary to-primary w-16 h-16 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                    <i class="fas fa-brain text-2xl text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-primary mb-1">IA en el Cuidado de la Salud</h3>
                                    <p class="text-secondary font-semibold text-lg">Universidad de Harvard</p>
                                    <p class="text-gray-600 text-sm">Estados Unidos</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                De las estrategias a la aplicación práctica de inteligencia artificial en salud.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NUEVA SECCIÓN: Videos de Cirugías -->
    <section id="videos" class="py-24 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4">Cirugías y Experiencias</h2>
                    <div class="w-24 h-1 bg-accent mx-auto mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Demonstraciones de procedimientos quirúrgicos y técnicas avanzadas en oftalmología
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Video Card 1 -->
                    <div class="video-card group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="relative aspect-video bg-gray-200">
                            <img src="/images/video-thumbnail-1.jpg?height=300&width=400" 
                                 alt="Cirugía de Cataratas" 
                                 class="w-full h-full object-cover">
                            <div class="video-overlay absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="play-button bg-white/90 rounded-full p-6 transform transition-transform duration-300">
                                    <i class="fas fa-play text-primary text-3xl ml-1"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="bg-accent/10 text-accent text-xs font-semibold px-3 py-1 rounded-full">Facoemulsificación</span>
                                <span class="text-gray-500 text-sm">12:45</span>
                            </div>
                            <h3 class="text-xl font-bold text-primary mb-2">Cirugía de Cataratas - Técnica Avanzada</h3>
                            <p class="text-gray-600 text-sm">Procedimiento completo de facoemulsificación con implante de lente intraocular premium.</p>
                        </div>
                    </div>

                    <!-- Video Card 2 -->
                    <div class="video-card group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="relative aspect-video bg-gray-200">
                            <img src="/images/video-thumbnail-2.jpg?height=300&width=400" 
                                 alt="Trasplante de Córnea" 
                                 class="w-full h-full object-cover">
                            <div class="video-overlay absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="play-button bg-white/90 rounded-full p-6 transform transition-transform duration-300">
                                    <i class="fas fa-play text-primary text-3xl ml-1"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="bg-secondary/10 text-secondary text-xs font-semibold px-3 py-1 rounded-full">Córnea</span>
                                <span class="text-gray-500 text-sm">18:30</span>
                            </div>
                            <h3 class="text-xl font-bold text-primary mb-2">Trasplante de Córnea DMEK</h3>
                            <p class="text-gray-600 text-sm">Técnica lamelar posterior para restaurar la transparencia corneal con mínima invasión.</p>
                        </div>
                    </div>

                    <!-- Video Card 3 -->
                    <div class="video-card group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="relative aspect-video bg-gray-200">
                            <img src="/images/video-thumbnail-3.jpg?height=300&width=400" 
                                 alt="Cirugía Refractiva" 
                                 class="w-full h-full object-cover">
                            <div class="video-overlay absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="play-button bg-white/90 rounded-full p-6 transform transition-transform duration-300">
                                    <i class="fas fa-play text-primary text-3xl ml-1"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="bg-primary/10 text-primary text-xs font-semibold px-3 py-1 rounded-full">Refractiva</span>
                                <span class="text-gray-500 text-sm">08:15</span>
                            </div>
                            <h3 class="text-xl font-bold text-primary mb-2">LASIK - Corrección Visual</h3>
                            <p class="text-gray-600 text-sm">Procedimiento de cirugía refractiva láser para corrección de miopía y astigmatismo.</p>
                        </div>
                    </div>

                    <!-- Video Card 4 -->
                    <div class="video-card group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="relative aspect-video bg-gray-200">
                            <img src="/images/video-thumbnail-4.jpg?height=300&width=400" 
                                 alt="Cross-linking Corneal" 
                                 class="w-full h-full object-cover">
                            <div class="video-overlay absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="play-button bg-white/90 rounded-full p-6 transform transition-transform duration-300">
                                    <i class="fas fa-play text-primary text-3xl ml-1"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="bg-accent/10 text-accent text-xs font-semibold px-3 py-1 rounded-full">Queratocono</span>
                                <span class="text-gray-500 text-sm">15:20</span>
                            </div>
                            <h3 class="text-xl font-bold text-primary mb-2">Cross-linking Corneal</h3>
                            <p class="text-gray-600 text-sm">Tratamiento para detener la progresión del queratocono mediante riboflavina y UV.</p>
                        </div>
                    </div>

                    <!-- Video Card 5 -->
                    <div class="video-card group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="relative aspect-video bg-gray-200">
                            <img src="/images/video-thumbnail-5.jpg?height=300&width=400" 
                                 alt="Implante de ICL" 
                                 class="w-full h-full object-cover">
                            <div class="video-overlay absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="play-button bg-white/90 rounded-full p-6 transform transition-transform duration-300">
                                    <i class="fas fa-play text-primary text-3xl ml-1"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="bg-secondary/10 text-secondary text-xs font-semibold px-3 py-1 rounded-full">Lente Fáquico</span>
                                <span class="text-gray-500 text-sm">10:45</span>
                            </div>
                            <h3 class="text-xl font-bold text-primary mb-2">Implante de Lente ICL</h3>
                            <p class="text-gray-600 text-sm">Corrección de alta miopía mediante lente intraocular fáquica posterior.</p>
                        </div>
                    </div>

                    <!-- Video Card 6 -->
                    <div class="video-card group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="relative aspect-video bg-gray-200">
                            <img src="/images/video-thumbnail-6.jpg?height=300&width=400" 
                                 alt="Conferencia Técnicas" 
                                 class="w-full h-full object-cover">
                            <div class="video-overlay absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="play-button bg-white/90 rounded-full p-6 transform transition-transform duration-300">
                                    <i class="fas fa-play text-primary text-3xl ml-1"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="bg-primary/10 text-primary text-xs font-semibold px-3 py-1 rounded-full">Conferencia</span>
                                <span class="text-gray-500 text-sm">45:00</span>
                            </div>
                            <h3 class="text-xl font-bold text-primary mb-2">Avances en Cirugía de Segmento Anterior</h3>
                            <p class="text-gray-600 text-sm">Conferencia magistral sobre las últimas innovaciones en técnicas quirúrgicas.</p>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <a href="https://www.youtube.com/@ferminsilvaperu" 
                       target="_blank"
                       class="inline-flex items-center gap-3 bg-gradient-to-r from-primary to-secondary text-white px-8 py-4 rounded-lg hover:shadow-xl transition-all hover:scale-105 font-semibold text-lg">
                        <i class="fab fa-youtube text-2xl"></i>
                        Ver Más en YouTube
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- NUEVA SECCIÓN: Testimonios de Pacientes -->
    <section id="testimonios" class="py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4">Historias de Nuestros Pacientes</h2>
                    <div class="w-24 h-1 bg-accent mx-auto mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Testimonios reales de personas que han recuperado su visión y calidad de vida
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Testimonio 1 -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-accent">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-accent to-[#a67c52] rounded-full flex items-center justify-center text-white text-2xl font-bold">
                                MR
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-primary">María Rodríguez</h3>
                                <p class="text-sm text-gray-600">Cirugía de Cataratas</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex gap-1 mb-3">
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                            </div>
                        </div>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            "Después de años viviendo con cataratas, el Dr. Silva me devolvió la visión. Su profesionalismo y calidez humana hicieron que todo el proceso fuera tranquilo y exitoso. Hoy puedo ver a mis nietos con claridad nuevamente."
                        </p>
                        <div class="text-sm text-gray-500 italic">
                            <i class="fas fa-calendar-alt mr-2"></i>Operada en Septiembre 2024
                        </div>
                    </div>

                    <!-- Testimonio 2 -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-secondary">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-secondary to-primary rounded-full flex items-center justify-center text-white text-2xl font-bold">
                                JC
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-primary">José Castro</h3>
                                <p class="text-sm text-gray-600">Trasplante de Córnea</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex gap-1 mb-3">
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                            </div>
                        </div>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            "Nunca pensé que volvería a ver bien después de mi problema corneal. El Dr. Silva y su equipo realizaron un trasplante perfecto. Su experiencia y dedicación son incomparables. Gracias por cambiar mi vida."
                        </p>
                        <div class="text-sm text-gray-500 italic">
                            <i class="fas fa-calendar-alt mr-2"></i>Operado en Julio 2024
                        </div>
                    </div>

                    <!-- Testimonio 3 -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-primary">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center text-white text-2xl font-bold">
                                AP
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-primary">Ana Pérez</h3>
                                <p class="text-sm text-gray-600">Cirugía LASIK</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex gap-1 mb-3">
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                            </div>
                        </div>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            "Usé lentes durante 15 años y siempre soñé con la libertad visual. El Dr. Silva hizo realidad ese sueño con la cirugía LASIK. El resultado es perfecto. ¡No puedo estar más feliz y agradecida!"
                        </p>
                        <div class="text-sm text-gray-500 italic">
                            <i class="fas fa-calendar-alt mr-2"></i>Operada en Octubre 2024
                        </div>
                    </div>

                    <!-- Testimonio 4 -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-accent">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-accent to-[#a67c52] rounded-full flex items-center justify-center text-white text-2xl font-bold">
                                LM
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-primary">Luis Martínez</h3>
                                <p class="text-sm text-gray-600">Implante de ICL</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex gap-1 mb-3">
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                            </div>
                        </div>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            "Tenía mucha miopía y no era candidato para LASIK. El Dr. Silva me recomendó el implante de ICL y fue la mejor decisión. La recuperación fue rápida y ahora veo increíblemente bien sin lentes."
                        </p>
                        <div class="text-sm text-gray-500 italic">
                            <i class="fas fa-calendar-alt mr-2"></i>Operado en Agosto 2024
                        </div>
                    </div>

                    <!-- Testimonio 5 -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-secondary">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-secondary to-primary rounded-full flex items-center justify-center text-white text-2xl font-bold">
                                CG
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-primary">Carmen Gutiérrez</h3>
                                <p class="text-sm text-gray-600">Cross-linking Corneal</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex gap-1 mb-3">
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                            </div>
                        </div>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            "El diagnóstico de queratocono me asustó mucho, pero el Dr. Silva me explicó todo con paciencia y realizó el tratamiento de cross-linking. Ha detenido el avance y estoy muy tranquila. Excelente profesional."
                        </p>
                        <div class="text-sm text-gray-500 italic">
                            <i class="fas fa-calendar-alt mr-2"></i>Operada en Junio 2024
                        </div>
                    </div>

                    <!-- Testimonio 6 -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-primary">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center text-white text-2xl font-bold">
                                RF
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-primary">Roberto Flores</h3>
                                <p class="text-sm text-gray-600">Cirugía de Cataratas Compleja</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex gap-1 mb-3">
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                                <i class="fas fa-star text-accent"></i>
                            </div>
                        </div>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            "Mi caso era complicado, pero el Dr. Silva lo resolvió con maestría. Su experiencia y las instalaciones de Clínica La Luz son de primer nivel. Recomiendo al 100% sus servicios. Estoy muy satisfecho."
                        </p>
                        <div class="text-sm text-gray-500 italic">
                            <i class="fas fa-calendar-alt mr-2"></i>Operado en Marzo 2024
                        </div>
                    </div>
                </div>

                <!-- Estadísticas de Satisfacción -->
                <div class="mt-16 bg-gradient-to-br from-primary to-secondary rounded-2xl p-8 md:p-12 text-white">
                    <div class="grid md:grid-cols-3 gap-8 text-center">
                        <div>
                            <div class="text-5xl font-bold mb-2">98%</div>
                            <div class="text-white/90 text-lg">Satisfacción de Pacientes</div>
                        </div>
                        <div>
                            <div class="text-5xl font-bold mb-2">25,000+</div>
                            <div class="text-white/90 text-lg">Cirugías Exitosas</div>
                        </div>
                        <div>
                            <div class="text-5xl font-bold mb-2">4.9/5</div>
                            <div class="text-white/90 text-lg">Calificación Promedio</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section id="contacto" class="py-24 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4">Contacto</h2>
                <div class="w-24 h-1 bg-accent mx-auto mb-6"></div>
                <p class="text-lg text-gray-600 mb-12">
                    Para consultas sobre programas educativos o información profesional
                </p>

                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <div class="bg-gray-50 rounded-2xl p-8 text-left">
                        <div class="flex items-start gap-4">
                            <div class="bg-primary text-white rounded-lg p-3">
                                <i class="fas fa-envelope text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-primary mb-2">Email</h3>
                                <p class="text-gray-600">fermin.silva@clinicalaluz.com.pe</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-2xl p-8 text-left">
                        <div class="flex items-start gap-4">
                            <div class="bg-accent text-white rounded-lg p-3">
                                <i class="fas fa-building text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-primary mb-2">Clínica La Luz</h3>
                                <p class="text-gray-600">Lima, Perú</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-primary to-secondary rounded-2xl p-8 text-white">
                    <h3 class="text-2xl font-bold mb-4">¿Interesado en nuestros programas de Fellowship?</h3>
                    <p class="mb-6">Visita La Luz Educa para conocer más sobre nuestras oportunidades de formación</p>
                    <a href="https://laluzeduca.clinicalaluz.com.pe/" 
                       class="inline-block bg-white text-primary px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        Explorar Programas Académicos
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white py-12">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-3 gap-8 mb-8">
                    <div>
                        <h3 class="font-bold text-xl mb-4">Dr. Fermín Silva</h3>
                        <p class="text-white/80 leading-relaxed">
                            Compromiso con la excelencia en oftalmología y educación médica.
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="font-bold text-xl mb-4">Enlaces Rápidos</h3>
                        <ul class="space-y-2">
                            <li><a href="#sobre-mi" class="text-white/80 hover:text-white transition-colors">Historia</a></li>
                            <li><a href="#estudios-medicos" class="text-white/80 hover:text-white transition-colors">Formación</a></li>
                            <li><a href="#videos" class="text-white/80 hover:text-white transition-colors">Cirugías</a></li>
                            <li><a href="#testimonios" class="text-white/80 hover:text-white transition-colors">Testimonios</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h3 class="font-bold text-xl mb-4">Sígueme</h3>
                        <div class="flex gap-4">
                            <a href="https://www.instagram.com/dr.ferminsilva/" class="bg-white/10 hover:bg-white/20 p-3 rounded-lg transition-colors">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                            <a href="https://www.youtube.com/@ferminsilvaperu" class="bg-white/10 hover:bg-white/20 p-3 rounded-lg transition-colors">
                                <i class="fab fa-youtube text-xl"></i>
                            </a>
                            <a href="https://www.tiktok.com/@drferminsilva/" class="bg-white/10 hover:bg-white/20 p-3 rounded-lg transition-colors">
                                <i class="fab fa-tiktok text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="border-t border-white/20 pt-8 text-center text-white/60">
                    <p>&copy; 2025 Dr. Fermín Silva. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

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