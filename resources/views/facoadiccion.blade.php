<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facoadicción 2026 - I Congreso Internacional</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#B11A1A',
                        secondary: '#0D3049',
                        accent: '#669BBB',
                    }
                }
            }
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="font-sans bg-white text-gray-900">
    
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 bg-black/95 backdrop-blur-sm z-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center gap-8">
                    <a href="index.html" class="text-white hover:text-primary transition-colors text-sm">Inicio</a>
                    <a href="#bienvenida" class="text-white hover:text-primary transition-colors text-sm">Bienvenida</a>
                    <a href="#comite" class="text-white hover:text-primary transition-colors text-sm">Comité</a>
                    <a href="#programa" class="text-white hover:text-primary transition-colors text-sm">Programa</a>
                    <a href="#registro" class="text-white hover:text-primary transition-colors text-sm">Registro</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-white">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <div class="flex flex-col gap-3">
                    <a href="index.html" class="text-white hover:text-primary transition-colors py-2">Inicio</a>
                    <a href="#bienvenida" class="text-white hover:text-primary transition-colors py-2">Bienvenida</a>
                    <a href="#comite" class="text-white hover:text-primary transition-colors py-2">Comité</a>
                    <a href="#programa" class="text-white hover:text-primary transition-colors py-2">Programa</a>
                    <a href="#registro" class="text-white hover:text-primary transition-colors py-2">Registro</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center bg-black text-white pt-16">
        <div class="container mx-auto px-4 lg:px-8 text-center py-20">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-7xl md:text-8xl lg:text-9xl font-black mb-6">
                    <span class="text-primary">FACO</span><span class="text-white">ADICCIÓN</span>
                </h1>
                <div class="text-5xl md:text-6xl font-bold text-primary mb-8">
                    2026
                </div>
                <p class="text-2xl md:text-3xl text-white/90 font-light tracking-wide">
                    I CONGRESO INTERNACIONAL
                </p>
            </div>
        </div>
    </section>

    <!-- Bienvenida Section -->
    <section id="bienvenida" class="py-20 bg-primary text-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-12">
                    Bienvenidos a Facoadicción 2026
                </h2>
                
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6">
                        <p class="text-lg leading-relaxed">
                            Es un honor darles la bienvenida al primer Congreso Internacional de Facoadicción 2026, un evento diseñado para reunir a los mejores especialistas en cirugía de catarata y segmento anterior de todo el mundo.
                        </p>
                        <p class="text-lg leading-relaxed">
                            Durante este congreso, compartiremos las últimas innovaciones, técnicas quirúrgicas avanzadas y casos clínicos complejos que están transformando la oftalmología moderna.
                        </p>
                        <p class="text-lg leading-relaxed">
                            Nuestro objetivo es crear un espacio de aprendizaje, intercambio de conocimientos y networking entre profesionales comprometidos con la excelencia en la atención oftalmológica.
                        </p>
                        <p class="text-xl font-semibold mt-8">
                            Dr. Fermín Silva<br>
                            <span class="text-sm font-normal">Director del Congreso</span>
                        </p>
                    </div>
                    
                    <div class="flex justify-center">
                        <div class="w-80 h-80 rounded-full overflow-hidden border-8 border-white shadow-2xl">
                            <img src="/placeholder.svg?height=400&width=400" 
                                 alt="Dr. Fermín Silva" 
                                 class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- La Luz Logo Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <div class="flex items-center justify-center gap-4 mb-6">
                    <i class="fas fa-heart text-primary text-5xl"></i>
                    <h2 class="text-5xl font-bold text-primary">La Luz</h2>
                </div>
                <p class="text-xl text-gray-700 leading-relaxed">
                    Clínica La Luz se enorgullece de ser la sede oficial de Facoadicción 2026, ofreciendo instalaciones de primer nivel y tecnología de vanguardia para garantizar una experiencia educativa excepcional.
                </p>
            </div>
        </div>
    </section>

    <!-- Comité Organizador -->
    <section id="comite" class="py-20 bg-primary text-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-16">
                    Comité Organizador
                </h2>
                
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-8">
                    <div class="flex flex-col items-center">
                        <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg mb-4">
                            <img src="/placeholder.svg?height=150&width=150" 
                                 alt="Miembro del comité" 
                                 class="w-full h-full object-cover bg-gray-300">
                        </div>
                        <p class="text-center text-sm font-semibold">Dr. Silva</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg mb-4">
                            <img src="/placeholder.svg?height=150&width=150" 
                                 alt="Miembro del comité" 
                                 class="w-full h-full object-cover bg-gray-300">
                        </div>
                        <p class="text-center text-sm font-semibold">Dra. García</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg mb-4">
                            <img src="/placeholder.svg?height=150&width=150" 
                                 alt="Miembro del comité" 
                                 class="w-full h-full object-cover bg-gray-300">
                        </div>
                        <p class="text-center text-sm font-semibold">Dr. Martínez</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg mb-4">
                            <img src="/placeholder.svg?height=150&width=150" 
                                 alt="Miembro del comité" 
                                 class="w-full h-full object-cover bg-gray-300">
                        </div>
                        <p class="text-center text-sm font-semibold">Dra. López</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg mb-4">
                            <img src="/placeholder.svg?height=150&width=150" 
                                 alt="Miembro del comité" 
                                 class="w-full h-full object-cover bg-gray-300">
                        </div>
                        <p class="text-center text-sm font-semibold">Dr. Rodríguez</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg mb-4">
                            <img src="/placeholder.svg?height=150&width=150" 
                                 alt="Miembro del comité" 
                                 class="w-full h-full object-cover bg-gray-300">
                        </div>
                        <p class="text-center text-sm font-semibold">Dra. Fernández</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg mb-4">
                            <img src="/placeholder.svg?height=150&width=150" 
                                 alt="Miembro del comité" 
                                 class="w-full h-full object-cover bg-gray-300">
                        </div>
                        <p class="text-center text-sm font-semibold">Dr. Pérez</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comité de Asesores -->
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 text-gray-800">
                    Comité de Asesores
                </h2>
                
                <div class="grid grid-cols-2 md:grid-cols-3 gap-12 justify-items-center">
                    <div class="flex flex-col items-center">
                        <div class="w-40 h-40 rounded-full overflow-hidden border-4 border-gray-300 shadow-lg mb-4">
                            <img src="/placeholder.svg?height=180&width=180" 
                                 alt="Asesor" 
                                 class="w-full h-full object-cover bg-gray-400">
                        </div>
                        <p class="text-center font-semibold text-gray-800">Dr. González</p>
                        <p class="text-center text-sm text-gray-600">Asesor Internacional</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-40 h-40 rounded-full overflow-hidden border-4 border-gray-300 shadow-lg mb-4">
                            <img src="/placeholder.svg?height=180&width=180" 
                                 alt="Asesor" 
                                 class="w-full h-full object-cover bg-gray-400">
                        </div>
                        <p class="text-center font-semibold text-gray-800">Dra. Sánchez</p>
                        <p class="text-center text-sm text-gray-600">Asesora Científica</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-40 h-40 rounded-full overflow-hidden border-4 border-gray-300 shadow-lg mb-4">
                            <img src="/placeholder.svg?height=180&width=180" 
                                 alt="Asesor" 
                                 class="w-full h-full object-cover bg-gray-400">
                        </div>
                        <p class="text-center font-semibold text-gray-800">Dr. Ramírez</p>
                        <p class="text-center text-sm text-gray-600">Asesor Técnico</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facoadicción Info -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-5xl mx-auto text-center">
                <div class="mb-12">
                    <h2 class="text-6xl font-black mb-4">
                        <span class="text-primary">FACO</span><span class="text-gray-800">ADICCIÓN</span>
                    </h2>
                </div>
                
                <p class="text-lg text-gray-700 leading-relaxed mb-12 max-w-3xl mx-auto">
                    Facoadicción es más que un congreso, es una experiencia inmersiva en el mundo de la cirugía de catarata y segmento anterior. Reunimos a los mejores especialistas internacionales para compartir conocimientos, técnicas innovadoras y casos clínicos que desafían los límites de la oftalmología moderna.
                </p>
                
                <div class="bg-primary text-white rounded-3xl p-12 shadow-2xl">
                    <h3 class="text-3xl font-bold mb-6">¿Qué es Facoadicción?</h3>
                    <p class="text-lg leading-relaxed mb-6">
                        Un congreso internacional dedicado exclusivamente a la cirugía de facoemulsificación, técnicas avanzadas de catarata, y las últimas innovaciones en segmento anterior. Durante tres días intensivos, los participantes tendrán acceso a:
                    </p>
                    <ul class="text-left max-w-2xl mx-auto space-y-3">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-accent text-xl mt-1"></i>
                            <span>Conferencias magistrales de expertos internacionales</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-accent text-xl mt-1"></i>
                            <span>Cirugías en vivo con transmisión en alta definición</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-accent text-xl mt-1"></i>
                            <span>Talleres prácticos con simuladores de última generación</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-accent text-xl mt-1"></i>
                            <span>Presentación de casos clínicos complejos</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-accent text-xl mt-1"></i>
                            <span>Networking con líderes de opinión en oftalmología</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Temáticas del Congreso -->
    <section class="py-20 bg-gray-50 relative overflow-hidden">
        <!-- Background medical icons -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 left-10 text-9xl text-gray-400">
                <i class="fas fa-eye"></i>
            </div>
            <div class="absolute bottom-10 right-10 text-9xl text-gray-400">
                <i class="fas fa-microscope"></i>
            </div>
            <div class="absolute top-1/2 left-1/4 text-9xl text-gray-400">
                <i class="fas fa-stethoscope"></i>
            </div>
        </div>
        
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 text-gray-800">
                    Temáticas del Congreso
                </h2>
                
                <div class="bg-primary text-white rounded-3xl p-12 shadow-2xl">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-2xl font-bold mb-6">Temas Principales</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3">
                                    <i class="fas fa-chevron-right text-accent mt-1"></i>
                                    <span>Técnicas avanzadas de facoemulsificación</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <i class="fas fa-chevron-right text-accent mt-1"></i>
                                    <span>Manejo de cataratas complejas</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <i class="fas fa-chevron-right text-accent mt-1"></i>
                                    <span>Lentes intraoculares premium</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <i class="fas fa-chevron-right text-accent mt-1"></i>
                                    <span>Cirugía refractiva del cristalino</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <i class="fas fa-chevron-right text-accent mt-1"></i>
                                    <span>Complicaciones y su manejo</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div>
                            <h3 class="text-2xl font-bold mb-6">Áreas Especializadas</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3">
                                    <i class="fas fa-chevron-right text-accent mt-1"></i>
                                    <span>Segmento anterior y córnea</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <i class="fas fa-chevron-right text-accent mt-1"></i>
                                    <span>Tecnología láser en cirugía de catarata</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <i class="fas fa-chevron-right text-accent mt-1"></i>
                                    <span>Biometría y cálculo de lentes</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <i class="fas fa-chevron-right text-accent mt-1"></i>
                                    <span>Cirugía combinada: catarata y glaucoma</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <i class="fas fa-chevron-right text-accent mt-1"></i>
                                    <span>Innovaciones tecnológicas</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Conferencias y Expertos Internacionales -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-4 text-gray-800">
                    Conferencias y Expertos Internacionales
                </h2>
                <p class="text-center text-gray-600 mb-16 text-lg">
                    Contamos con la participación de reconocidos especialistas de todo el mundo
                </p>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="flex flex-col items-center">
                        <div class="w-40 h-40 rounded-full overflow-hidden border-4 border-primary shadow-lg mb-4">
                            <img src="/placeholder.svg?height=180&width=180" 
                                 alt="Conferencista" 
                                 class="w-full h-full object-cover bg-gray-300">
                        </div>
                        <p class="text-center font-semibold text-gray-800">Dr. John Smith</p>
                        <p class="text-center text-sm text-gray-600">Estados Unidos</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-40 h-40 rounded-full overflow-hidden border-4 border-primary shadow-lg mb-4">
                            <img src="/placeholder.svg?height=180&width=180" 
                                 alt="Conferencista" 
                                 class="w-full h-full object-cover bg-gray-300">
                        </div>
                        <p class="text-center font-semibold text-gray-800">Dra. María Costa</p>
                        <p class="text-center text-sm text-gray-600">Costa Rica</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-40 h-40 rounded-full overflow-hidden border-4 border-primary shadow-lg mb-4">
                            <img src="/placeholder.svg?height=180&width=180" 
                                 alt="Conferencista" 
                                 class="w-full h-full object-cover bg-gray-300">
                        </div>
                        <p class="text-center font-semibold text-gray-800">Dr. Raj Patel</p>
                        <p class="text-center text-sm text-gray-600">India</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-40 h-40 rounded-full overflow-hidden border-4 border-primary shadow-lg mb-4">
                            <img src="/placeholder.svg?height=180&width=180" 
                                 alt="Conferencista" 
                                 class="w-full h-full object-cover bg-gray-300">
                        </div>
                        <p class="text-center font-semibold text-gray-800">Dr. Carlos Benítez</p>
                        <p class="text-center text-sm text-gray-600">Paraguay</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Profesores Invitados -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 text-gray-800">
                    Profesores Invitados
                </h2>
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-primary text-white py-4 px-6">
                        <div class="grid grid-cols-2 gap-4 font-semibold">
                            <div>Nombre</div>
                            <div>País</div>
                        </div>
                    </div>
                    
                    <div class="divide-y divide-gray-200">
                        <div class="grid grid-cols-2 gap-4 py-4 px-6 hover:bg-gray-50">
                            <div class="text-gray-800">Dr. Fermín Silva</div>
                            <div class="text-gray-600">Venezuela</div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 py-4 px-6 hover:bg-gray-50">
                            <div class="text-gray-800">Dr. John Smith</div>
                            <div class="text-gray-600">Estados Unidos</div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 py-4 px-6 hover:bg-gray-50">
                            <div class="text-gray-800">Dra. María Costa</div>
                            <div class="text-gray-600">Costa Rica</div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 py-4 px-6 hover:bg-gray-50">
                            <div class="text-gray-800">Dr. Raj Patel</div>
                            <div class="text-gray-600">India</div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 py-4 px-6 hover:bg-gray-50">
                            <div class="text-gray-800">Dr. Carlos Benítez</div>
                            <div class="text-gray-600">Paraguay</div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 py-4 px-6 hover:bg-gray-50">
                            <div class="text-gray-800">Dra. Ana Martínez</div>
                            <div class="text-gray-600">España</div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 py-4 px-6 hover:bg-gray-50">
                            <div class="text-gray-800">Dr. Paulo Santos</div>
                            <div class="text-gray-600">Brasil</div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 py-4 px-6 hover:bg-gray-50">
                            <div class="text-gray-800">Dr. Michael Chen</div>
                            <div class="text-gray-600">China</div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 py-4 px-6 hover:bg-gray-50">
                            <div class="text-gray-800">Dra. Sophie Dubois</div>
                            <div class="text-gray-600">Francia</div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 py-4 px-6 hover:bg-gray-50">
                            <div class="text-gray-800">Dr. Hans Mueller</div>
                            <div class="text-gray-600">Alemania</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programa del Evento -->
    <section id="programa" class="py-20 bg-white relative">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-800">
                    Programa del Evento
                </h2>
                <p class="text-xl text-gray-600 mb-12">
                    Tres días intensivos de aprendizaje y networking
                </p>
                
                <div class="mb-12">
                    <img src="/placeholder.svg?height=400&width=600" 
                         alt="Dr. Fermín Silva presentando" 
                         class="w-full max-w-2xl mx-auto rounded-lg shadow-xl">
                </div>
                
                <div id="registro" class="bg-green-600 hover:bg-green-700 transition-colors text-white inline-block px-12 py-4 rounded-full text-xl font-bold shadow-lg cursor-pointer">
                    <i class="fas fa-calendar-check mr-3"></i>
                    Regístrate Ahora
                </div>
                
                <p class="text-gray-600 mt-6 text-lg">
                    Cupos limitados - Asegura tu lugar en el congreso
                </p>
            </div>
        </div>
    </section>

    <!-- Agenda Detallada -->
    <section class="py-20 bg-primary text-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-16">
                    Agenda del Congreso
                </h2>
                
                <div class="space-y-8">
                    <!-- Día 1 -->
                    <div class="bg-white/10 rounded-lg p-8 backdrop-blur-sm">
                        <h3 class="text-3xl font-bold mb-6">Día 1 - Viernes 15 de Marzo</h3>
                        <div class="space-y-4">
                            <div class="grid md:grid-cols-3 gap-4 border-b border-white/20 pb-4">
                                <div class="font-semibold">8:00 - 9:00 AM</div>
                                <div class="md:col-span-2">Registro y bienvenida</div>
                            </div>
                            <div class="grid md:grid-cols-3 gap-4 border-b border-white/20 pb-4">
                                <div class="font-semibold">9:00 - 10:30 AM</div>
                                <div class="md:col-span-2">Conferencia magistral: Innovaciones en facoemulsificación</div>
                            </div>
                            <div class="grid md:grid-cols-3 gap-4 border-b border-white/20 pb-4">
                                <div class="font-semibold">10:30 - 11:00 AM</div>
                                <div class="md:col-span-2">Coffee break</div>
                            </div>
                            <div class="grid md:grid-cols-3 gap-4 border-b border-white/20 pb-4">
                                <div class="font-semibold">11:00 - 1:00 PM</div>
                                <div class="md:col-span-2">Cirugías en vivo - Casos complejos</div>
                            </div>
                            <div class="grid md:grid-cols-3 gap-4 border-b border-white/20 pb-4">
                                <div class="font-semibold">1:00 - 2:30 PM</div>
                                <div class="md:col-span-2">Almuerzo</div>
                            </div>
                            <div class="grid md:grid-cols-3 gap-4 border-b border-white/20 pb-4">
                                <div class="font-semibold">2:30 - 4:00 PM</div>
                                <div class="md:col-span-2">Talleres prácticos: Técnicas avanzadas</div>
                            </div>
                            <div class="grid md:grid-cols-3 gap-4">
                                <div class="font-semibold">4:00 - 6:00 PM</div>
                                <div class="md:col-span-2">Panel de discusión: Complicaciones y soluciones</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Día 2 -->
                    <div class="bg-white/10 rounded-lg p-8 backdrop-blur-sm">
                        <h3 class="text-3xl font-bold mb-6">Día 2 - Sábado 16 de Marzo</h3>
                        <div class="space-y-4">
                            <div class="grid md:grid-cols-3 gap-4 border-b border-white/20 pb-4">
                                <div class="font-semibold">8:00 - 9:00 AM</div>
                                <div class="md:col-span-2">Conferencia: Lentes intraoculares premium</div>
                            </div>
                            <div class="grid md:grid-cols-3 gap-4 border-b border-white/20 pb-4">
                                <div class="font-semibold">9:00 - 11:00 AM</div>
                                <div class="md:col-span-2">Presentación de casos clínicos</div>
                            </div>
                            <div class="grid md:grid-cols-3 gap-4 border-b border-white/20 pb-4">
                                <div class="font-semibold">11:00 - 11:30 AM</div>
                                <div class="md:col-span-2">Coffee break</div>
                            </div>
                            <div class="grid md:grid-cols-3 gap-4 border-b border-white/20 pb-4">
                                <div class="font-semibold">11:30 - 1:30 PM</div>
                                <div class="md:col-span-2">Cirugías en vivo - Técnicas refractivas</div>
                            </div>
                            <div class="grid md:grid-cols-3 gap-4 border-b border-white/20 pb-4">
                                <div class="font-semibold">1:30 - 3:00 PM</div>
                                <div class="md:col-span-2">Almuerzo</div>
                            </div>
                            <div class="grid md:grid-cols-3 gap-4 border-b border-white/20 pb-4">
                                <div class="font-semibold">3:00 - 5:00 PM</div>
                                <div class="md:col-span-2">Simposio: Segmento anterior y córnea</div>
                            </div>
                            <div class="grid md:grid-cols-3 gap-4">
                                <div class="font-semibold">7:00 PM</div>
                                <div class="md:col-span-2">Cena de gala</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Día 3 -->
                    <div class="bg-white/10 rounded-lg p-8 backdrop-blur-sm">
                        <h3 class="text-3xl font-bold mb-6">Día 3 - Domingo 17 de Marzo</h3>
                        <div class="space-y-4">
                            <div class="grid md:grid-cols-3 gap-4 border-b border-white/20 pb-4">
                                <div class="font-semibold">8:00 - 10:00 AM</div>
                                <div class="md:col-span-2">Conferencia: Tecnología láser en catarata</div>
                            </div>
                            <div class="grid md:grid-cols-3 gap-4 border-b border-white/20 pb-4">
                                <div class="font-semibold">10:00 - 10:30 AM</div>
                                <div class="md:col-span-2">Coffee break</div>
                            </div>
                            <div class="grid md:grid-cols-3 gap-4 border-b border-white/20 pb-4">
                                <div class="font-semibold">10:30 - 12:30 PM</div>
                                <div class="md:col-span-2">Mesa redonda: Futuro de la cirugía de catarata</div>
                            </div>
                            <div class="grid md:grid-cols-3 gap-4 border-b border-white/20 pb-4">
                                <div class="font-semibold">12:30 - 1:00 PM</div>
                                <div class="md:col-span-2">Ceremonia de clausura y entrega de certificados</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- La Luz Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="flex items-center justify-center gap-4 mb-12">
                    <i class="fas fa-heart text-primary text-5xl"></i>
                    <h2 class="text-5xl font-bold text-primary">La Luz</h2>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8 mb-12">
                    <div class="flex flex-col items-center">
                        <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-primary shadow-lg mb-4">
                            <img src="/placeholder.svg?height=200&width=200" 
                                 alt="Dr. Fermín Silva" 
                                 class="w-full h-full object-cover">
                        </div>
                        <p class="text-center font-semibold text-gray-800 text-lg">Dr. Fermín Silva</p>
                        <p class="text-center text-sm text-gray-600">Director Médico</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-primary shadow-lg mb-4">
                            <img src="/placeholder.svg?height=200&width=200" 
                                 alt="Equipo médico" 
                                 class="w-full h-full object-cover">
                        </div>
                        <p class="text-center font-semibold text-gray-800 text-lg">Dra. Ana López</p>
                        <p class="text-center text-sm text-gray-600">Subdirectora</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-primary shadow-lg mb-4">
                            <img src="/placeholder.svg?height=200&width=200" 
                                 alt="Equipo médico" 
                                 class="w-full h-full object-cover">
                        </div>
                        <p class="text-center font-semibold text-gray-800 text-lg">Dr. Carlos Pérez</p>
                        <p class="text-center text-sm text-gray-600">Coordinador Académico</p>
                    </div>
                </div>
                
                <div class="bg-gray-100 rounded-lg p-8">
                    <h3 class="text-2xl font-bold text-center mb-6 text-gray-800">Ubicación</h3>
                    <div class="aspect-video bg-gray-300 rounded-lg overflow-hidden">
                        <img src="/placeholder.svg?height=400&width=800" 
                             alt="Mapa de ubicación" 
                             class="w-full h-full object-cover">
                    </div>
                    <p class="text-center mt-6 text-gray-700 text-lg">
                        Clínica La Luz - Av. Principal #123, Caracas, Venezuela
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sponsors Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 text-gray-800">
                    Instituciones Colaboradoras
                </h2>
                
                <div class="grid grid-cols-2 md:grid-cols-3 gap-12 items-center justify-items-center mb-16">
                    <div class="bg-white p-8 rounded-lg shadow-md w-full h-32 flex items-center justify-center">
                        <span class="text-2xl font-bold text-gray-400">SFEC</span>
                    </div>
                    <div class="bg-white p-8 rounded-lg shadow-md w-full h-32 flex items-center justify-center">
                        <span class="text-2xl font-bold text-gray-400">LOGO</span>
                    </div>
                    <div class="bg-white p-8 rounded-lg shadow-md w-full h-32 flex items-center justify-center">
                        <span class="text-2xl font-bold text-gray-400">USV</span>
                    </div>
                </div>
                
                <h3 class="text-3xl font-bold text-center mb-12 text-gray-800">
                    Participación Internacional
                </h3>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center justify-items-center mb-16">
                    <div class="flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-gray-300 shadow-md mb-3">
                            <img src="/placeholder.svg?height=100&width=100" 
                                 alt="Paraguay" 
                                 class="w-full h-full object-cover">
                        </div>
                        <p class="text-center font-semibold text-gray-700">Paraguay</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-gray-300 shadow-md mb-3">
                            <img src="/placeholder.svg?height=100&width=100" 
                                 alt="India" 
                                 class="w-full h-full object-cover">
                        </div>
                        <p class="text-center font-semibold text-gray-700">India</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-gray-300 shadow-md mb-3">
                            <img src="/placeholder.svg?height=100&width=100" 
                                 alt="Costa Rica" 
                                 class="w-full h-full object-cover">
                        </div>
                        <p class="text-center font-semibold text-gray-700">Costa Rica</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-gray-300 shadow-md mb-3">
                            <img src="/placeholder.svg?height=100&width=100" 
                                 alt="Estados Unidos" 
                                 class="w-full h-full object-cover">
                        </div>
                        <p class="text-center font-semibold text-gray-700">Estados Unidos</p>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center justify-items-center">
                    <div class="bg-white p-6 rounded-lg shadow-md w-full h-24 flex items-center justify-center">
                        <span class="text-xl font-bold text-gray-400">OPTITECH</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md w-full h-24 flex items-center justify-center">
                        <span class="text-xl font-bold text-gray-400">VISION</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md w-full h-24 flex items-center justify-center">
                        <span class="text-xl font-bold text-gray-400">EYECARE</span>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md w-full h-24 flex items-center justify-center">
                        <span class="text-xl font-bold text-gray-400">MEDTECH</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white py-12">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-8">
                    <h3 class="text-3xl font-bold mb-4">
                        <span class="text-white">FACO</span><span class="text-white/80">ADICCIÓN</span> 2026
                    </h3>
                    <p class="text-white/80 mb-6">
                        I Congreso Internacional de Cirugía de Catarata y Segmento Anterior
                    </p>
                </div>
                
                <div class="flex justify-center gap-6 mb-8">
                    <a href="#" class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                        <i class="fab fa-facebook text-xl"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                        <i class="fab fa-youtube text-xl"></i>
                    </a>
                </div>
                
                <div class="border-t border-white/20 pt-8 text-center text-sm text-white/60">
                    <p>&copy; 2026 Facoadicción. Todos los derechos reservados.</p>
                    <p class="mt-2">Organizado por Clínica La Luz y La Luz Educa</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Galería de Eventos Anteriores -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-4 text-gray-800">
                    Eventos Anteriores
                </h2>
                <p class="text-center text-gray-600 mb-12 text-lg">
                    Momentos destacados de nuestras conferencias y congresos
                </p>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="relative group overflow-hidden rounded-lg shadow-lg">
                        <img src="/placeholder.svg?height=400&width=600" 
                             alt="Conferencia anterior" 
                             class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6">
                            <div>
                                <h3 class="text-white text-xl font-bold mb-2">Congreso Internacional 2024</h3>
                                <p class="text-white/80 text-sm">Más de 500 participantes de 20 países</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="relative group overflow-hidden rounded-lg shadow-lg">
                        <img src="/placeholder.svg?height=400&width=600" 
                             alt="Cirugía en vivo" 
                             class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6">
                            <div>
                                <h3 class="text-white text-xl font-bold mb-2">Cirugías en Vivo 2024</h3>
                                <p class="text-white/80 text-sm">Transmisión en alta definición de casos complejos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuBtn && mobileMenu) {
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
        }

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offset = 64;
                    const targetPosition = target.offsetTop - offset;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Registro button
        const registroBtn = document.getElementById('registro');
        if (registroBtn) {
            registroBtn.addEventListener('click', () => {
                alert('¡Gracias por tu interés! El formulario de registro estará disponible próximamente.');
            });
        }
    </script>
</body>

</html>
