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
                        primary: '#B11A1A',
                        secondary: '#0D3049',
                        accent: '#669BBB',
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
    </style>
</head>

<body class="font-sans bg-gray-50 text-gray-900">
    
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 bg-white/95 backdrop-blur-sm shadow-sm z-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center gap-2">
                    <img src="/images/logo.png?height=40&width=40" alt="Logo Dr. Fermín Silva" class="h-20 w-20">
                   
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-6">
                    <a href="#inicio" class="text-gray-700 hover:text-primary transition-colors">Inicio</a>
                    <a href="#sobre-mi" class="text-gray-700 hover:text-primary transition-colors">Historia</a>
                    <a href="#estudios-medicos" class="text-gray-700 hover:text-primary transition-colors">Formacion Medica</a>
                    <a href="#estudios-gerenciales" class="text-gray-700 hover:text-primary transition-colors">Formación Empresarial</a>
                    <a href="https://laluzeduca.clinicalaluz.com.pe/" class="text-gray-700 hover:text-primary transition-colors">La Luz Educa</a>
                    <!-- Added link to Facoadicción page -->
                    <a href="https://facoadiccion.pe/" class="text-gray-700 hover:text-primary transition-colors">Facoadicción 2026</a>
                    <a href="#contacto" class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-primary/90 transition-colors">Contacto</a>
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
                    <a href="#clinica" class="text-gray-700 hover:text-primary transition-colors py-2">Formación Empresarial</a>
                    <a href="https://laluzeduca.clinicalaluz.com.pe/" class="text-gray-700 hover:text-primary transition-colors py-2">La Luz Educa</a>
                    <!-- Added link to Facoadicción page in mobile menu -->
                    <a href="https://facoadiccion.pe/" class="text-gray-700 hover:text-primary transition-colors py-2">Facoadicción 2026</a>
                    <a href="#contacto" class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-primary/90 transition-colors text-center">Contacto</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <!-- Rediseñado hero para dar prominencia a la foto del doctor y redes sociales -->
    <section id="inicio" class="relative min-h-screen flex items-center justify-center bg-white text-gray-900 overflow-hidden pt-16">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-20 left-10 w-64 h-64 border-2 border-secondary rounded-full"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 border-2 border-primary rounded-full"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-accent rounded-full"></div>
        </div>

        <div class="container mx-auto px-4 lg:px-8 relative z-10 py-12">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Column - foto de fermin  -->
                    <div class="order-2 lg:order-1 animate-fade-in">
                        <div class="relative">
                             <!-- Main Photo -->
                            <div class="relative aspect-[3/4] max-w-md mx-auto lg:mx-0 rounded-2xl overflow-hidden shadow-2xl border-4 border-gray-200">
                                <img src="/images/fermin4.png?height=800&width=600" 
                                     alt="Dr. Fermín Silva" 
                                     class="w-full h-full object-cover">
                            </div>
                            
                             <!-- Redes sociales con colores vibrantes sobre fondo blanco -->
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

                        <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight text-secondary">
                            Dr. Fermín Silva
                        </h1>

                        <p class="text-2xl md:text-3xl text-primary font-semibold mb-4">
                            Cirujano Oftalmólogo de alto volumen
                        </p>
                        <p class="text-lg md:text-xl text-gray-700 mb-6 leading-relaxed">
                                Fundador del departamento de capacitacion, docencia e investigacion de la Clinica La Luz  en el 2012
                        </p>
                        <p class="text-lg md:text-xl text-gray-700 mb-6 leading-relaxed">
                         Subespecialista de Segmento Anterior, Córnea y Cirugía Refractiva
                        </p>
                        <p class="text-lg md:text-xl text-gray-700 mb-6 leading-relaxed">
                            Profesor de  fellowship de Segmento anterior , Cornea y Cirugía Refractiva

                        </p>
                          <p class="text-lg md:text-xl text-gray-700 mb-6 leading-relaxed">
                            Profesor de cirugía experimental de trasplantes de cornea totales y lamelares en ojos de cerdo 
                        </p>

                        <p class="text-base md:text-lg text-gray-700 mb-8 leading-relaxed">
                         Fundador de Grupo Empresarial La Luz
                        </p>

                         <!-- Nuevos CTAs enfocados en información profesional, no en agendar citas -->
                        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start items-center mb-8">
                            <a href="https://laluzeduca.clinicalaluz.com.pe/" class="bg-primary text-white px-8 py-4 rounded-lg hover:bg-primary/90 transition-all hover:scale-105 min-w-[220px] text-center font-semibold shadow-lg">
                                <i class="fas fa-chalkboard-teacher mr-2"></i>
                               Oferta Academica 
                            </a>
                            <a href="#sobre-mi" class="border-2 border-secondary text-secondary px-8 py-4 rounded-lg hover:bg-secondary hover:text-white transition-all hover:scale-105 min-w-[220px] text-center font-semibold">
                                <i class="fas fa-user-md mr-2"></i>
                                Conocer Más
                            </a>
                        </div>

                        
                    </div>
                </div>

                 <!-- Key Highlights - Below main content -->

<div class="py-20 bg-gradient-to-b from-white to-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        
            <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border-2 border-transparent hover:border-[#669BBB]">
                <div class="absolute inset-0 bg-gradient-to-br from-[#669BBB]/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-gradient-to-br from-[#669BBB] to-[#0D3049] flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                        <i class="fas fa-chalkboard-teacher text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-[#0D3049] mb-4 text-center group-hover:text-[#669BBB] transition-colors duration-300">
                        Capacitación Continua
                    </h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        Compromiso permanente con la educación médica de excelencia.
                    </p>
                </div>
            </div>

            
            <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border-2 border-transparent hover:border-[#B11A1A]">
                <div class="absolute inset-0 bg-gradient-to-br from-[#B11A1A]/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-gradient-to-br from-[#B11A1A] to-[#8B0000] flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                        <i class="fas fa-heart text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-[#0D3049] mb-4 text-center group-hover:text-[#B11A1A] transition-colors duration-300">
                       Mi prioridad son mis pacientes y colaboradores.
                    </h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        Atención centrada en el bienestar de cada paciente y en el desarrollo profesional de nuestro equipo, construyendo relaciones basadas en la confianza, el respeto y la excelencia en el cuidado de la salud visual.
                    </p>
                </div>
            </div>

       <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border-2 border-transparent hover:border-[#0D3049]">
                <div class="absolute inset-0 bg-gradient-to-br from-[#0D3049]/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-gradient-to-br from-[#0D3049] to-[#051829] flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                        <i class="fas fa-award text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-[#0D3049] mb-4 text-center group-hover:text-[#0D3049] transition-colors duration-300">
                        Dedicación
                    </h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        Más de 15 años de trayectoria dedicados a la innovación quirúrgica y al avance de la oftalmología.
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

    <!-- Nueva sección dedicada a redes sociales -->
    <section class="py-20 bg-white border-b border-gray-200">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-5xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4">Sígueme en Redes Sociales</h2>
                <p class="text-xl text-gray-600 mb-12">
                    Mantente actualizado con las últimas novedades, conferencias y contenido educativo
                </p>
                
                <!-- Aumentado significativamente el tamaño de las tarjetas y los iconos de redes sociales -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <a href="https://www.instagram.com/dr.ferminsilva/" class="group flex flex-col items-center gap-6 p-8 bg-gradient-to-br from-pink-50 to-purple-50 rounded-3xl hover:shadow-2xl transition-all hover:scale-105 border-2 border-transparent hover:border-pink-200">
                        <div class="w-28 h-28 bg-gradient-to-br from-pink-500 to-purple-600 rounded-full flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform">
                            <i class="fab fa-instagram text-white text-5xl"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800 text-xl mb-1">Instagram</p>
                            <p class="text-base text-gray-600">@drferminsilva</p>
                        </div>
                    </a>
                    
                    <a href="https://www.instagram.com/dr.ferminsilva/" class="group flex flex-col items-center gap-6 p-8 bg-gradient-to-br from-red-50 to-red-100 rounded-3xl hover:shadow-2xl transition-all hover:scale-105 border-2 border-transparent hover:border-red-200">
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

   
 
<section id="sobre-mi" class="py-24 bg-gradient-to-b from-white to-gray-50">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-7xl mx-auto">
        
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-[#0D3049] mb-4">Dr. Fermín Silva</h2>
                <div class="w-24 h-1 bg-[#B11A1A] mx-auto mb-6"></div>
              
            </div>

  
            <div class="grid lg:grid-cols-2 gap-12 items-start mb-16">
               
                <div class="relative">
                    <div class="aspect-[4/5] bg-gradient-to-br from-[#0D3049] to-[#669BBB] rounded-2xl overflow-hidden shadow-2xl">
                        <img src="/images/cirugia1.JPG?height=600&width=480" 
                             alt="Dr. Fermín Silva" 
                             class="w-full h-full object-cover">
                    </div>
                   
                    <div class="absolute -bottom-6 -right-6 bg-[#B11A1A] text-white rounded-2xl p-6 shadow-xl">
                        <div class="text-center">
                            <div class="text-4xl font-bold">25+</div>
                            <div class="text-sm font-semibold">Años de</div>
                            <div class="text-sm font-semibold">Experiencia</div>
                        </div>
                    </div>
                </div>

             
                <div class="space-y-6">
        
                    <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-[#B11A1A]">
                        <p class="text-lg text-gray-700 leading-relaxed">
                                 <span class="font-bold text-[#B11A1A]">Subespecialista en Segmento Anterior, Córnea y Cirugía Refractiva</span> con 25 años de experiencia. Empresario de la salud que ha demostrado que se pueden lograr grandes cosas con vocación de servicio y responsabilidad social.
                        </p>
                    </div>

                
                    <div class="grid grid-cols-3 gap-4">
                        <div class="bg-white rounded-xl p-4 shadow-md text-center border-t-4 border-[#B11A1A] hover:shadow-xl transition-shadow">
                            <div class="text-3xl font-bold text-[#B11A1A] mb-1">8</div>
                            <div class="text-sm text-gray-600 font-semibold">Sedes en Perú</div>
                        </div>
                        <div class="bg-white rounded-xl p-4 shadow-md text-center border-t-4 border-[#669BBB] hover:shadow-xl transition-shadow">
                            <div class="text-3xl font-bold text-[#669BBB] mb-1">3</div>
                            <div class="text-sm text-gray-600 font-semibold">Programas de Fellowship</div>
                        </div>
                        <div class="bg-white rounded-xl p-4 shadow-md text-center border-t-4 border-[#0D3049] hover:shadow-xl transition-shadow">
                            <div class="text-3xl font-bold text-[#0D3049] mb-1">50+</div>
                            <div class="text-sm text-gray-600 font-semibold">Fellows Formados</div>
                        </div>
                    </div>

                  
                    <div class="bg-gradient-to-br from-[#0D3049] to-[#669BBB] rounded-xl p-6 shadow-lg text-white">
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
                       <div class="bg-gradient-to-br from-[#0D3049] to-[#669BBB] rounded-xl p-6 shadow-lg text-white">
                        <div class="flex items-start gap-4">
                            <div class="bg-white/20 rounded-lg p-3 flex-shrink-0">
                                <i class="fas fa-lightbulb text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-xl mb-2">Compromiso con la Responsabilidad Social</h3>
                                <p class="text-white/90 leading-relaxed">
                                   Clínica La Luz fue creada con un propósito: transformar la oftalmología peruana a través de la educación y el acceso universal a servicios de calidad
                                </p>
                            </div>
                            
                        </div>


                    </div>

                    
                </div>
            </div>

           
            <div class="mb-16">
              

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <div class="group bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-[#B11A1A]">
                        <div class="bg-gradient-to-br from-[#B11A1A] to-[#8B0000] w-16 h-16 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-user-md text-2xl text-white"></i>
                        </div>
                        <h4 class="font-bold text-lg text-[#0D3049] mb-2">Residentados Médicos</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Convenio con la Universidad Nacional Federico Villarreal para la formación de nuevos oftalmólogos
                        </p>
                    </div>

               
                    <div class="group bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-[#669BBB]">
                        <div class="bg-gradient-to-br from-[#669BBB] to-[#0D3049] w-16 h-16 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-graduation-cap text-2xl text-white"></i>
                        </div>
                        <h4 class="font-bold text-lg text-[#0D3049] mb-2">3 Programas de Fellowship</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Segmento Anterior, Córnea y Cirugía Refractiva • Glaucoma • Retina y Vítreo
                        </p>
                    </div>

              
                    <div class="group bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-[#0D3049]">
                        <div class="bg-gradient-to-br from-[#0D3049] to-[#051829] w-16 h-16 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-trophy text-2xl text-white"></i>
                        </div>
                        <h4 class="font-bold text-lg text-[#0D3049] mb-2">Premio La Luz</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Reconocimiento a los primeros puestos de medicina en universidades estatales del Perú
                        </p>
                    </div>

                    <div class="group bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-[#B11A1A]">
                        <div class="bg-gradient-to-br from-[#B11A1A] to-[#8B0000] w-16 h-16 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-heart text-2xl text-white"></i>
                        </div>
                        <h4 class="font-bold text-lg text-[#0D3049] mb-2">Luz para tus Ojos</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Atención gratuita para personas mayores de 50 años con disminución de agudeza visual
                        </p>
                    </div>
                </div>
            </div>

  
            <div class="bg-gradient-to-br from-[#0D3049] via-[#0D3049] to-[#B11A1A] rounded-2xl p-8 md:p-12 shadow-2xl text-white">
                <div class="text-center mb-10">
                    <h3 class="text-3xl md:text-4xl font-bold mb-4">Descentralización de Servicios de Alta Especialización</h3>
                 
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
           
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 hover:bg-white/20 transition-all">
                        <div class="flex items-center gap-3 mb-3">
                            <i class="fas fa-map-marker-alt text-2xl text-[#669BBB]"></i>
                            <h4 class="font-bold text-xl">Chiclayo</h4>
                        </div>
                        <p class="text-white/80 text-sm">Centro de alta especialización en el norte del Perú</p>
                    </div>

             
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 hover:bg-white/20 transition-all">
                        <div class="flex items-center gap-3 mb-3">
                            <i class="fas fa-map-marker-alt text-2xl text-[#669BBB]"></i>
                            <h4 class="font-bold text-xl">Tacna</h4>
                        </div>
                        <p class="text-white/80 text-sm">Servicios especializados en el sur del país</p>
                    </div>

                 
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 hover:bg-white/20 transition-all">
                        <div class="flex items-center gap-3 mb-3">
                            <i class="fas fa-map-marker-alt text-2xl text-[#669BBB]"></i>
                            <h4 class="font-bold text-xl">Jaén</h4>
                        </div>
                        <p class="text-white/80 text-sm">Atención oftalmológica de excelencia en la selva</p>
                    </div>

                
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 hover:bg-white/20 transition-all relative overflow-hidden">
                        <div class="absolute top-2 right-2 bg-[#B11A1A] text-white text-xs font-bold px-3 py-1 rounded-full">
                            Próximamente
                        </div>
                        <div class="flex items-center gap-3 mb-3">
                            <i class="fas fa-map-marker-alt text-2xl text-[#669BBB]"></i>
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
   

<section id="estudios-medicos" class="py-24 bg-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
         
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-[#0D3049] mb-4">Formación Médica</h2>
                <div class="w-24 h-1 bg-[#B11A1A] mx-auto mb-6"></div>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Trayectoria académica especializada en oftalmología y subespecialidades
                </p>
            </div>

         
            <div class="relative">
           
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-[#B11A1A] via-[#669BBB] to-[#0D3049]"></div>

             
                <div class="space-y-12">
                 
                    <div class="relative">
                        <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                            <div class="md:text-right mb-4 md:mb-0">
                                <div class="inline-block md:block">
                                    <div class="bg-gradient-to-br from-[#B11A1A] to-[#8B0000] text-white rounded-xl p-6 shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
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
                       
                        <div class="hidden md:block absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 w-6 h-6 bg-[#B11A1A] rounded-full border-4 border-white shadow-lg"></div>
                    </div>

                    <div class="relative">
                        <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                            <div class="hidden md:block"></div>
                            <div class="mb-4 md:mb-0">
                                <div class="bg-gradient-to-br from-[#669BBB] to-[#0D3049] text-white rounded-xl p-6 shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
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
                       
                        <div class="hidden md:block absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 w-6 h-6 bg-[#669BBB] rounded-full border-4 border-white shadow-lg"></div>
                    </div>

                    
                    <div class="relative">
                        <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                            <div class="md:text-right mb-4 md:mb-0">
                                <div class="inline-block md:block">
                                    <div class="bg-gradient-to-br from-[#0D3049] to-[#051829] text-white rounded-xl p-6 shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
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
                      
                        <div class="hidden md:block absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 w-6 h-6 bg-[#0D3049] rounded-full border-4 border-white shadow-lg"></div>
                    </div>
 
                    <div class="relative">
                        <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                            <div class="hidden md:block"></div>
                            <div class="mb-4 md:mb-0">
                                <div class="bg-gradient-to-br from-[#B11A1A] to-[#8B0000] text-white rounded-xl p-6 shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
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
              
                        <div class="hidden md:block absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 w-6 h-6 bg-[#B11A1A] rounded-full border-4 border-white shadow-lg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 
<section id="estudios-gerenciales" class="py-24 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
           
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-[#0D3049] mb-4">Formación Empresarial</h2>
                <div class="w-24 h-1 bg-[#B11A1A] mx-auto mb-6"></div>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Capacitación continua en gestión empresarial y liderazgo estratégico
                </p>
            </div>

       
            <div class="grid md:grid-cols-2 gap-8">


             <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-transparent hover:border-[#B11A1A] overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#B11A1A]/10 to-transparent rounded-bl-full"></div>
                    <div class="relative z-10">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="bg-gradient-to-br from-[#B11A1A] to-[#8B0000] w-16 h-16 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i class="fas fa-chart-line text-2xl text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-[#0D3049] mb-1">Diplomado en Finanzas Corporativas</h3>
                                <p class="text-[#B11A1A] font-semibold text-lg">Universidad de Lima</p>
                                <p class="text-gray-600 text-sm">Lima, Perú</p>
                            </div>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Especialización en finanzas corporativas para profesionales de la salud y empresarios.
                        </p>
                    </div>
                </div>
                
               
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-transparent hover:border-[#0D3049] overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#0D3049]/10 to-transparent rounded-bl-full"></div>
                    <div class="relative z-10">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="bg-gradient-to-br from-[#0D3049] to-[#051829] w-16 h-16 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i class="fas fa-briefcase text-2xl text-white"></i>
                            </div>
                            <div>
                                <div class="inline-block bg-[#0D3049] text-white text-sm font-bold px-3 py-1 rounded-full mb-2">
                                    
                                </div>
                                <h3 class="text-2xl font-bold text-[#0D3049] mb-1">PADE Propietarios de Empresas</h3>
                                <p class="text-[#0D3049] font-semibold text-lg">Universidad de Piura</p>
                                <p class="text-gray-600 text-sm">Piura, Perú</p>
                            </div>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Programa de Alta Dirección para propietarios y directivos de empresas familiares.
                        </p>
                    </div>
                </div>

           
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-transparent hover:border-[#669BBB] overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#669BBB]/10 to-transparent rounded-bl-full"></div>
                    <div class="relative z-10">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="bg-gradient-to-br from-[#669BBB] to-[#0D3049] w-16 h-16 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i class="fas fa-project-diagram text-2xl text-white"></i>
                            </div>
                            <div>
                                <div class="inline-block bg-[#669BBB] text-white text-sm font-bold px-3 py-1 rounded-full mb-2">
                                   
                                </div>
                                <h3 class="text-2xl font-bold text-[#0D3049] mb-1">Program Management Senior</h3>
                                <p class="text-[#669BBB] font-semibold text-lg">Centrum PUCP</p>
                                <p class="text-gray-600 text-sm">Madrid, España</p>
                            </div>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Programa avanzado en gestión de proyectos y dirección estratégica de programas empresariales.
                        </p>
                    </div>
                </div>

                 <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-transparent hover:border-[#B11A1A] overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#B11A1A]/10 to-transparent rounded-bl-full"></div>
                    <div class="relative z-10">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="bg-gradient-to-br from-[#B11A1A] to-[#8B0000] w-16 h-16 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i class="fas fa-graduation-cap text-2xl text-white"></i>
                            </div>
                            <div>
                                <div class="inline-block bg-[#B11A1A] text-white text-sm font-bold px-3 py-1 rounded-full mb-2">
                                    
                                </div>
                                <h3 class="text-2xl font-bold text-[#0D3049] mb-1">MBA</h3>
                                <p class="text-[#B11A1A] font-semibold text-lg">Universidad del Pacífico</p>
                                <p class="text-gray-600 text-sm">Lima, Perú</p>
                            </div>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Maestría en Administración de Empresas enfocada en gestión estratégica y liderazgo empresarial.
                        </p>
                    </div>
                </div>
                  <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-transparent hover:border-[#B11A1A] overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#B11A1A]/10 to-transparent rounded-bl-full"></div>
                    <div class="relative z-10">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="bg-gradient-to-br from-[#B11A1A] to-[#8B0000] w-16 h-16 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                 <image  src="/images/harvad.svg"></image>
                            </div>
                            <div>
                                <div class="inline-block bg-[#B11A1A] text-white text-sm font-bold px-3 py-1 rounded-full mb-2">
                                    
                                </div>
                                <h3 class="text-2xl font-bold text-[#0D3049] mb-1">Curso de transformacion digital en servicios de salud </h3>
                                <p class="text-[#B11A1A] font-semibold text-lg">Universidad de Harvard</p>
                                <p class="text-gray-600 text-sm">EEUU</p>
                            </div>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                           
                        </p>
                    </div>
                </div>
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-transparent hover:border-[#B11A1A] overflow-hidden">
                         <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#B11A1A]/10 to-transparent rounded-bl-full"></div>
                                    <div class="relative z-10">
                                        <div class="flex items-start gap-4 mb-4">
                                            <div class="bg-gradient-to-br  w-16 h-16 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                              <image  src="/images/harvad.svg"></image>
                                            </div>
                                            <div>
                                                <div class="inline-block bg-[#B11A1A] text-white text-sm font-bold px-3 py-1 rounded-full mb-2">
                                                    
                                                </div>
                                                <h3 class="text-2xl font-bold text-[#0D3049] mb-1">La IA en el Cuidado de la Salud: De las Estrategias a la Aplicación </h3>
                                                <p class="text-[#B11A1A] font-semibold text-lg">Universidad de Harvard</p>
                                                <p class="text-gray-600 text-sm">EEUU</p>
                                            </div>
                                        </div>
                                        <p class="text-gray-600 leading-relaxed">
                                        
                                        </p>
                                    </div>
                                </div>




              

               
            </div>


            
        </div>
    </div>
</section>



 <section id="logros" class="py-16 md:py-24 bg-gradient-to-br from-primary/5 via-white to-accent/5 relative overflow-hidden">
        <!-- Background Decorative Elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-bl from-primary/10 to-transparent rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-accent/10 to-transparent rounded-full blur-3xl"></div>
        <div class="absolute top-1/4 left-1/4 w-4 h-4 bg-primary rounded-full opacity-20"></div>
        <div class="absolute top-1/3 right-1/3 w-6 h-6 border-2 border-accent rounded-full opacity-30"></div>
        <div class="absolute bottom-1/4 right-1/4 w-8 h-8 bg-secondary/20 rounded-full"></div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16">
                
                
              
                <div class="w-24 h-1 bg-gradient-to-r from-primary to-accent mx-auto mb-8"></div>
            </div>

            <!-- Main Content -->
            <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
                <!-- Left Content -->
                <div class="space-y-8">
                    <!-- Achievement Badge -->
                    <div class="inline-flex items-center bg-gradient-to-r from-primary to-primary/90 text-white px-6 py-3 rounded-full shadow-lg">
                        <i class="fas fa-trophy mr-3 text-yellow-300"></i>
                        <span class="font-semibold">MBA - Universidad del Pacífico Business School</span>
                    </div>

                    <!-- Main Text -->
                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-700 text-lg leading-relaxed mb-6">
                            Con gran emoción y orgullo, compartimos un nuevo capítulo en la historia de crecimiento y liderazgo del 
                            <strong class="text-secondary">Dr. Fermín Silva Cayatopa</strong>, Fundador y CEO del Grupo Empresarial La Luz, 
                            y uno de los oftalmólogos más reconocidos del país.
                        </p>
                        
                        <p class="text-gray-700 text-lg leading-relaxed mb-6">
                            Hoy celebramos su reciente graduación del <strong class="text-primary">MBA en la prestigiosa Universidad del Pacífico – Business School</strong>, 
                            una meta que refleja su constante compromiso por seguir aprendiendo, innovando y brindando lo mejor a miles de peruanos.
                        </p>
                        
                        <p class="text-gray-700 text-lg leading-relaxed">
                            Este logro no solo suma a su trayectoria profesional, sino que reafirma su visión de seguir construyendo 
                            <strong class="text-accent">una salud más humana, accesible y de calidad para todos</strong>.
                        </p>
                    </div>

                  
                </div>

                <!-- Right Image -->
                <div class="relative">
                    <div class="relative group">
                        <!-- Main Image Container -->
                        <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                            <img src="{{ asset('images/fermin-mba.png') }}" 
                                 alt="Dr. Fermín Silva Cayatopa en su graduación del MBA - Universidad del Pacífico" 
                                 class="w-full h-auto object-cover transition-transform duration-500 group-hover:scale-105">
                            
                            <!-- Image Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-secondary/30 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>

                        <!-- Floating University Badge -->
                        <div class="absolute -top-6 -right-6 bg-white p-4 rounded-xl shadow-xl border border-gray-100 transform rotate-3 hover:rotate-0 transition-transform duration-300">
                            <div class="text-center">
                                <div class="w-12 h-12 bg-gradient-to-br from-secondary to-secondary/80 rounded-full flex items-center justify-center mx-auto mb-2">
                                    <i class="fas fa-university text-white"></i>
                                </div>
                                <div class="text-xs font-bold text-secondary">Universidad</div>
                                <div class="text-xs text-gray-600">del Pacífico</div>
                            </div>
                        </div>

                        <!-- Floating MBA Badge -->
                        <div class="absolute -bottom-4 -left-4 bg-gradient-to-r from-primary to-primary/90 text-white p-4 rounded-xl shadow-xl transform -rotate-2 hover:rotate-0 transition-transform duration-300">
                            <div class="flex items-center">
                                <i class="fas fa-medal text-yellow-300 text-xl mr-2"></i>
                                <div>
                                    <div class="font-bold text-sm">MBA</div>
                                    <div class="text-xs opacity-90">Business School</div>
                                </div>
                            </div>
                        </div>

                        <!-- Decorative Elements -->
                        <div class="absolute top-4 left-4 w-8 h-8 border-2 border-accent rounded-full opacity-30"></div>
                        <div class="absolute bottom-8 right-8 w-6 h-6 bg-primary rounded-full opacity-40"></div>
                    </div>
                </div>
            </div>

          
        </div>
    </section>



    <!-- Contact Section -->
    <section id="contacto" class="py-24 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4">Contáctanos</h2>
                    <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
                    <!-- Actualizado texto para enfocarse en información, no solo citas -->
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Solicita información sobre nuestros servicios, programas de fellowship o consultas profesionales
                    </p>
                </div>

                <div class="grid lg:grid-cols-2 gap-12">
                    <div>
                        <div class="bg-white rounded-lg shadow-md p-8 border border-gray-100">
                            <h3 class="text-2xl font-bold text-primary mb-6">Envíanos un Mensaje</h3>
                            <form id="contact-form" class="space-y-6">
                                <div class="space-y-2">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Nombre Completo</label>
                                    <input type="text" 
                                           id="name" 
                                           name="name"
                                           placeholder="Tu nombre" 
                                           required
                                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition">
                                </div>
                                <div class="space-y-2">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" 
                                           id="email" 
                                           name="email"
                                           placeholder="tu@email.com" 
                                           required
                                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition">
                                </div>
                                <div class="space-y-2">
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Teléfono</label>
                                    <input type="tel" 
                                           id="phone" 
                                           name="phone"
                                           placeholder="+58 (212) 123-4567"
                                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition">
                                </div>
                                <div class="space-y-2">
                                    <label for="message" class="block text-sm font-medium text-gray-700">Mensaje</label>
                                    <textarea id="message" 
                                              name="message"
                                              placeholder="¿En qué podemos ayudarte?" 
                                              rows="5" 
                                              required
                                              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition resize-none"></textarea>
                                </div>
                                <button type="submit" class="w-full bg-secondary text-white px-8 py-3 rounded-lg hover:bg-secondary/90 transition-colors font-medium">
                                    Enviar Mensaje
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="bg-white rounded-lg shadow-md p-8 border border-gray-100">
                            <h3 class="text-2xl font-bold text-primary mb-6">Información de Contacto</h3>
                            <div class="space-y-6">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-map-marker-alt text-accent text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-primary mb-1">Ubicación</h4>
                                        <p class="text-gray-600">Clínica La Luz, Av. Arequipa #1148</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-phone text-accent text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-primary mb-1">Teléfono</h4>
                                        <p class="text-gray-600">+51 999943047</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-envelope text-accent text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-primary mb-1">Email</h4>
                                        <p class="text-gray-600">fsilva@clinicalaluz.com</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-clock text-accent text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-primary mb-1">Horario</h4>
                                        <p class="text-gray-600">Lun - Vie: 8:00 AM - 6:00 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-primary text-white rounded-lg shadow-md p-8">
                             <!-- Actualizado enfoque de urgencias -->
                            <h3 class="text-xl font-bold mb-3">¿Necesitas Más Información?</h3>
                            <p class="text-white/80 mb-4">
                                Contáctanos para conocer más sobre nuestras especialidades, programas de formación o servicios.
                            </p>
                            <a href="tel:+51999943047" class="block w-full bg-white text-primary px-8 py-3 rounded-lg hover:bg-white/90 transition-colors font-medium text-center">
                                Llamar Ahora
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-secondary text-white py-12">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-3 gap-8 mb-8">
                    <div>
                        <div class="flex items-center gap-2 mb-4">
                            <i class="fas fa-eye text-accent text-2xl"></i>
                            <span class="text-xl font-bold">Dr. Fermín Silva</span>
                        </div>
                        <p class="text-white/70 text-sm leading-relaxed">
                            Oftalmólogo especialista en cirugía de catarata y refractiva. CEO del Grupo Empresarial Clínica La Luz y creador del programa La Luz Educa.
                        </p>
                    </div>

                    <div>
                        <h4 class="font-semibold text-lg mb-4">Enlaces Rápidos</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#inicio" class="text-white/70 hover:text-accent transition-colors">Inicio</a></li>
                            <li><a href="#sobre-mi" class="text-white/70 hover:text-accent transition-colors">Sobre Mí</a></li>
                            <li><a href="#especialidades" class="text-white/70 hover:text-accent transition-colors">Especialidades</a></li>
                            <li><a href="#clinica" class="text-white/70 hover:text-accent transition-colors">Clínica La Luz</a></li>
                            <li><a href="#fellowship" class="text-white/70 hover:text-accent transition-colors">La Luz Educa</a></li>
                            <li><a href="#contacto" class="text-white/70 hover:text-accent transition-colors">Contacto</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold text-lg mb-4">Síguenos</h4>
                        <!-- Agregado TikTok al footer -->
                        <div class="flex gap-4">
                            <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                                <i class="fab fa-tiktok"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="border-t border-white/10 pt-8 text-center text-sm text-white/60">
                    <p>&copy; 2025 Dr. Fermín Silva. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking on a link
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // Form submission
        const contactForm = document.getElementById('contact-form');
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                message: document.getElementById('message').value
            };
            
            console.log('Form submitted:', formData);
            alert('¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.');
            contactForm.reset();
        });

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offset = 64; // Height of fixed navbar
                    const targetPosition = target.offsetTop - offset;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>

</html>
