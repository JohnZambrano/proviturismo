
const searchableItems = [
    { id: 1, title: 'Cascada La Rusia', description: 'Hermosa caída de agua natural, uno de los principales atractivos turísticos de Providencia' },
    { id: 2, title: 'Salado Bellaco', description: 'Sitio histórico y natural con gran valor cultural para la comunidad' },
    { id: 3, title: 'La Gruta', description: 'Lugar sagrado y punto de interés religioso en Providencia' },
    { id: 4, title: 'La Tola', description: 'Sitio arqueológico y cultural con historia ancestral' },
    { id: 5, title: 'Lugares Turísticos', description: 'Descubre todos los atractivos turísticos que Providencia tiene para ti' },
    { id: 6, title: 'Actividades Culturales', description: 'Agenda de eventos y manifestaciones culturales del municipio' },
    { id: 7, title: 'Estadio San Bernardo', description: 'Centro deportivo principal para eventos y actividades deportivas' },
    { id: 8, title: 'La Profundidad', description: 'Zona natural con características únicas para el turismo de aventura' },
    { id: 9, title: 'Servicios', description: 'Directorio completo de servicios turísticos disponibles' },
    { id: 10, title: 'Hoteles', description: 'Opciones de alojamiento y hospedaje en Providencia' },
    { id: 11, title: 'Transporte', description: 'Información sobre medios de transporte y movilidad en el municipio' },
    { id: 12, title: 'Restaurantes', description: 'Guía de establecimientos gastronómicos y comida típica' },
    { id: 13, title: 'Guías Turísticos', description: 'Contacto de guías locales certificados para tu visita' },
    { id: 14, title: 'Experiencias', description: 'Historias y reseñas de visitantes en Providencia' },
    { id: 15, title: 'Blogs', description: 'Artículos y publicaciones sobre turismo en Providencia' },
    { id: 16, title: 'Contacto', description: 'Información para comunicarte con ProviTurismo' },
    { id: 17, title: 'Artesanías Locales', description: 'Productos y artesanías tradicionales de la región' },
    { id: 18, title: 'Fiestas Tradicionales', description: 'Calendario de celebraciones y eventos culturales' },
    { id: 19, title: 'Rutas Turísticas', description: 'Recorridos sugeridos para conocer Providencia' },
    { id: 20, title: 'Galería Fotográfica', description: 'Colección de imágenes de los atractivos turísticos' }
    { id: 21, title: 'Caminatas Ecológicas', description: 'Rutas y senderos naturales para explorar la región' },
    { id: 22, title: 'Fauna Local', description: 'Información sobre la diversidad de animales en la zona' },
    { id: 23, title: 'Flora Nativa', description: 'Especies de plantas y vegetación características de Providencia' },
    { id: 24, title: 'Miradores', description: 'Puntos panorámicos para admirar el paisaje' },
    { id: 25, title: 'Alojamiento Rural', description: 'Opciones de hospedaje en fincas y zonas campestres' },
    { id: 26, title: 'Gastronomía Local', description: 'Platos típicos y especialidades culinarias de la región' },
    { id: 27, title: 'Mercado Campesino', description: 'Punto de venta de productos agrícolas locales' },
    { id: 28, title: 'Deportes Extremos', description: 'Actividades de aventura disponibles en la zona' },
    { id: 29, title: 'Historia Local', description: 'Reseña histórica y desarrollo del municipio' },
    { id: 30, title: 'Leyendas', description: 'Historias y mitos tradicionales de Providencia' },
    { id: 31, title: 'Música Tradicional', description: 'Expresiones musicales propias de la región' },
    { id: 32, title: 'Danzas Típicas', description: 'Bailes y coreografías tradicionales' },
    { id: 33, title: 'Calendario Festivo', description: 'Fechas importantes y celebraciones anuales' },
    { id: 34, title: 'Producción Agrícola', description: 'Principales cultivos y productos de la región' },
    { id: 35, title: 'Artistas Locales', description: 'Directorio de artistas y artesanos del municipio' },
    { id: 36, title: 'Fotografía', description: 'Servicios de fotografía turística y paisajística' },
    { id: 37, title: 'Camping', description: 'Zonas habilitadas para acampar y hacer fogatas' },
    { id: 38, title: 'Talleres Artesanales', description: 'Espacios de aprendizaje de técnicas tradicionales' },
    { id: 39, title: 'Turismo Rural', description: 'Experiencias en fincas y actividades agrícolas' },
    { id: 40, title: 'Fauna Silvestre', description: 'Avistamiento de especies en su hábitat natural' },
    { id: 41, title: 'Productos Típicos', description: 'Souvenirs y productos característicos de la región' },
    { id: 42, title: 'Paquetes Turísticos', description: 'Ofertas y planes organizados para visitantes' },
    { id: 43, title: 'Eventos Deportivos', description: 'Calendario de competencias y actividades deportivas' },
    { id: 44, title: 'Turismo Religioso', description: 'Sitios y actividades de interés religioso' },
    { id: 45, title: 'Mapas Turísticos', description: 'Guías y planos de ubicación de puntos de interés' },
    { id: 46, title: 'Clima', description: 'Información meteorológica y mejores épocas para visitar' },
    { id: 47, title: 'Emergencias', description: 'Contactos y procedimientos en caso de emergencia' },
    { id: 48, title: 'Farmacias', description: 'Ubicación de servicios farmacéuticos disponibles' },
    { id: 49, title: 'Bancos', description: 'Servicios bancarios y cajeros automáticos' },
    { id: 50, title: 'WiFi Zones', description: 'Puntos de acceso a internet en el municipio' },
    { id: 51, title: 'Parqueaderos', description: 'Zonas de estacionamiento disponibles' },
    { id: 52, title: 'Talleres Mecánicos', description: 'Servicios de reparación de vehículos' },
    { id: 53, title: 'Recorridos Guiados', description: 'Tours organizados con guías locales' },
    { id: 54, title: 'Horarios de Servicio', description: 'Información de atención en establecimientos' },
    { id: 55, title: 'Reservas', description: 'Sistema de reservaciones para servicios turísticos' },
    { id: 56, title: 'Testimonios', description: 'Opiniones y experiencias de visitantes' },
    { id: 57, title: 'Noticias', description: 'Actualizaciones y novedades turísticas' },
    { id: 58, title: 'FAQ', description: 'Preguntas frecuentes sobre el destino' },
    { id: 59, title: 'Recomendaciones', description: 'Consejos útiles para tu visita' },
    { id: 60, title: 'Tarifas', description: 'Información de precios y costos de servicios' }
];

function handleSearch(event) {
    event.preventDefault();
    const searchInput = document.getElementById('searchInput');
    const searchTerm = searchInput.value.toLowerCase();
    const resultsContainer = document.getElementById('searchResults');
    
    // Filtrar items basado en el término de búsqueda
    const results = searchableItems.filter(item => 
        item.title.toLowerCase().includes(searchTerm) || 
        item.description.toLowerCase().includes(searchTerm)
    );
    
    // Mostrar resultados
    displayResults(results);
}

function displayResults(results) {
    const resultsContainer = document.getElementById('searchResults');
    resultsContainer.style.display = results.length ? 'block' : 'none';
    
    resultsContainer.innerHTML = results.map(item => `
        <div class="search-item" onclick="selectItem(${item.id})">
            <h6 class="mb-0">${item.title}</h6>
            <small class="text-muted">${item.description}</small>
        </div>
    `).join('');
}

function selectItem(id) {
    const item = searchableItems.find(item => item.id === id);
    if (item) {
        // Aquí puedes manejar la selección del item
        console.log('Item seleccionado:', item);
        // Por ejemplo, redirigir a una página de detalles:
        // window.location.href = `/detalles/${id}`;
    }
    
    // Limpiar y cerrar resultados
    document.getElementById('searchInput').value = '';
    document.getElementById('searchResults').style.display = 'none';
}

// Cerrar resultados al hacer clic fuera
document.addEventListener('click', (event) => {
    const searchResults = document.getElementById('searchResults');
    const searchForm = document.getElementById('searchForm');
    
    if (!searchForm.contains(event.target)) {
        searchResults.style.display = 'none';
    }
});