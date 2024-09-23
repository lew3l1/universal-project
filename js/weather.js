document.addEventListener('DOMContentLoaded', function () {
    const apiKey = 'd8ce02510be4f1fb689cbfa9c648b132'; // Вставьте ваш ключ OpenWeather
    const city = 'Ufa'; // Можно изменить на любой город
    const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${apiKey}`;

    // Запрос данных о погоде
    fetch(url)
        .then(response => response.json())
        .then(data => {
            
            const temperature = Math.round(data.main.temp);
            const weatherElement = document.getElementById('weather');

            
            const weatherIcon = '<img src="/img/svg/Sun.svg" alt="Sun Icon" width="15" height="15">';

           
            weatherElement.innerHTML = `${weatherIcon} ${temperature}°C`;
        })
        .catch(error => {
            console.error('Ошибка получения данных о погоде:', error);
        });
});
