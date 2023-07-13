<x-app-layout>

    @include('layouts.navbar')

    @include('layouts.navbar-mobile')

    <header>
        <h1>Головна</h1>
    </header>

    <div class="wrapper">
        <main>

            <x-buttons></x-buttons>

            <section id="summary">
                <section id="summary-row">
                    <ul>
                        <li>
                            <span>2</span>
                            <p>активні</p>
                        </li>
                        <li>
                            <span>12</span>
                            <p>завершені</p>
                        </li>
                        <li>
                            <span>12040 UAH</span>
                            <p>сума всіх угод</p>
                        </li>
                        <li>
                            <span>122</span>
                            <p>нових контактів</p>
                        </li>
                    </ul>
                </section>
            </section>

            <section id="dashboard">
                <div class="card">
                    <div class="card-header">
                        <h3>Ліди</h3>
                        <i class="material-icons expand-more">
                            expand_more
                        </i>
                    </div>
                    <div class="card-summary">
                        <div>
                            <span>10<small>123 200 UAH</small></span>
                            <p>Активні проєкти</p>
                        </div>
                        <div>
                            <span>12<small>8 успішних угод</small></span>
                            <p>Завершені проєкти</p>
                        </div>
                    </div>
                    <div class="card-summary-tags">
                        <ul>
                            <li><a href="#">Нові<span>0</span></a></li>
                            <li><a href="#">Перемовини<span>0</span></a></li>
                            <li><a href="#">Передзвон<span>0</span></a></li>
                            <li><a href="#">Без відповіді<span>0</span></a></li>
                            <li><a href="#">На підпис<span>0</span></a></li>
                            <li><a href="#">Мороз<span>0</span></a></li>
                        </ul>
                    </div>
                    
                    <div class="card-details" style="display:none">
                        <h4>Джерела угод</h4>
                        <canvas class="pie-chart" id="lead-sources"></canvas>
                        <h4>Продажі</h4>
                        <canvas class="chart" id="lead-sales"></canvas>
                        <!--<div class="chart-legend">
                        <ul>
                            <li>
                                <span>
                                    <i class="material-icons">sign_language</i>
                                    <p>Вручну
                                        <small>6 угод</small>
                                    </p>
                                </span>
                                <p>60%</p>
                            </li>
                            <li>
                                <span>
                                    <i class="material-icons">
                                        auto_fix_high
                                    </i>
                                    <p>Автоматично
                                        <small>3 угоди</small>
                                    </p>
                                </span>
                                <p>30%</p>
                            </li>
                            <li>
                                <span>
                                    <i class="material-icons">
                                        more_horiz
                                    </i>
                                        
                                    <p>Інше
                                        <small>1 угода</small>
                                    </p>
                                </span>
                                <p>10%</p>
                            </li>
                        </ul>
                        </div>-->
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3>Послуги</h3>
                        <i class="material-icons expand-more">
                            expand_more
                        </i>
                    </div>
                    <div class="card-summary">
                        <div>
                            <span>29<small>1 293 891 UAH</small></span>
                            <p>Активні проєкти</p>
                        </div>
                        <div>
                            <span>1231<small>1230 успішних угод</small></span>
                            <p>Завершені проєкти</p>
                        </div>
                    </div>
                    <div class="card-summary-tags">
                        <ul>
                            <li><a href="#">Сайти<span>0</span></a></li>
                            <li><a href="#">Дизайн<span>0</span></a></li>
                            <li><a href="#">Маркетинг<span>0</span></a></li>
                            <li><a href="#">Медіа<span>0</span></a></li>
                            <li><a href="#">Інші<span>0</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3>Команда</h3>
                        <i class="material-icons expand-more">
                            expand_more
                        </i>
                    </div>
                    <div class="card-summary">
                        <div>
                            <span>1<small>Telegram</small></span>
                        </div>
                        <div>
                            <span>0<small>Viber</small></span>
                        </div>
                        <div>
                            <span>0<small>WhatsApp</small></span>
                        </div>
                    </div>
                    <div class="card-summary-tags">
                        <ul>
                            <li><a href="#">Віталій<span>0</span></a></li>
                            <li><a href="#">Андрій<span>0</span></a></li>
                            <li><a href="#">Віктор<span>0</span></a></li>
                            <li><a href="#">Яна<span>0</span></a></li>
                            <li><a href="#">Інші<span>0</span></a></li>
                        </ul>
                    </div>
                </div>

            </section>
        </main>

        <aside>

                <i class="material-icons">
                    task
                </i>
                <h4>Завдання</h4>
                <div class = "aside-card">
                    <section>
                        <a href="#">Прострочені <b>2</b></a>
                        <a href="#">На сьогодні <b>0</b></a>
                        <a href="#">Важливі <b>3</b></a>
                    </section>

                    <div class="aside-card-category">

                        <header>Сайти</header>
                        <table>
                            <tbody>
                                <tr>
                                    <th>Назва</th>
                                    <th>Статус</th>
                                </tr>
                                <tr>
                                    <td><a href="#">CRM-система</a></td>
                                    <td>В роботі</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Автомагазин запчастин, мастил, шин, колес, електрика, усе таке інше</a></td>
                                    <td>Виконано</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Створення лендінгу</a></td>
                                    <td>Скасовано</td>
                                </tr>
                                
                            </tbody>
                        </table>

                        <header>Дизайн</header>
                        <table>
                            <tbody>
                                <tr>
                                    <th>Назва</th>
                                    <th>Статус</th>
                                </tr>
                                <tr>
                                    <td><a href="#">Буклет букетів</a></td>
                                    <td>В роботі</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Журнал самодєлкін</a></td>
                                    <td>В роботі</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Макет системи CRM</a></td>
                                    <td>У черзі</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>


                <i class="material-icons">
                    chat
                </i>
                <h4>Чати</h4>
                <div class = "aside-card">
                    <section>
                        <a href="#">Активні<b>2</b></a>
                        <a href="#">Без відповіді<b>0</b></a>
                        <a href="#">Архів <b>3</b></a>
                    </section>

                    <div class="aside-card-category">

                        <header>
                            <a href="#">Telegram</a>
                            <span>(9)</span>
                        </header>
                        
                        <header>
                            <a href="#">Viber</a>
                            <span>(3)</span>
                        </header>
                        
                        <header>
                            <a href="#">WhatsApp</a>
                            <span>(12)</span>
                        </header>
                    </div>
                </div>

                <i class="material-icons">
                    handshake
                </i>
                <h4>Нові угоди</h4>
                <div class = "aside-card">
                    
                    <a href="#"><b>UX design</b></a>

                    <div class="aside-card-details">
                        <div>
                            <span>
                                <i class="material-icons">support_agent</i>
                                <p>Менеджер</p>
                            </span>
                            <b><a href="#">Оксана Вікторівна</a></b>
                            
                        </div>
                        <div>
                            <span>
                                <i class="material-icons">
                                    category
                                </i>
                                <p>Категорія</p>
                            </span>
                            <b>Дизайн</b>
                        </div>
                        <div>
                            <span>
                                <i class="material-icons">
                                    account_balance_wallet
                                </i>
                                <p>Сума</p>
                            </span>
                           <b>2500 UAH</b>
                        </div>
                    </div>
                </div>

                <div class = "aside-card">
                    
                    <a href="#"><b>Створення сайту</b></a>

                    <div class="aside-card-details">
                        <div>
                            <span>
                                <i class="material-icons">support_agent</i>
                                <p>Менеджер</p>
                            </span>
                            <b><a href="#">Valentin</a></b>
                            
                        </div>
                        <div>
                            <span>
                                <i class="material-icons">
                                    category
                                </i>
                                <p>Категорія</p>
                            </span>
                            <b>Сайти</b>
                        </div>
                        <div>
                            <span>
                                <i class="material-icons">
                                    account_balance_wallet
                                </i>
                                <p>Сума</p>
                            </span>
                           <b>12000 UAH</b>
                        </div>
                    </div>
                </div>


                <i class="material-icons">
                    calendar_month
                </i>
                <h4>Календар</h4>
                <x-calendar></x-calendar>

        </aside>

    </div>

    <footer>
    
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ URL::asset('js/UserException.js'); }}"></script>
    <script src="{{ URL::asset('js/random-color.js'); }}"></script>


    <script>
        const cards = Array.from(document.querySelectorAll(".card-summary-tags"));
        
        cards.forEach(function (tagsCollection) {
            const tags = Array.from(tagsCollection.querySelectorAll("li"));
            tags.forEach(function (tag) {
                tag.style.background = randomColor();
            });
        });

    </script>

    <!-- CHARTS -->
    <script>
        new Chart(
            document.getElementById("lead-sources"), {
                type: 'doughnut',

                data: {
                    labels: ['Вручну', 'Автоматично', 'Інше'],
                    datasets: [{
                        label: 'Угода',
                        data: [10, 5, 2],
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            align: 'center',
                            fullSize: true,
                            maxWidth: 300,

                            labels: {
                                boxWidth: 20,
                                boxHeight: 20,

                                usePointStyle: true,
                                pointStyle: 'rectRounded',
                                
                                generateLabels: (chart) => {
                                    const datasets = chart.data.datasets;
                                    return datasets[0].data.map((data, i) => ({
                                        text: `${chart.data.labels[i]} ${data}`,
                                        fillStyle: datasets[0].backgroundColor[i],
                                    }))
                                }
                            }
                        },
                    },
                    animation: {
                        duration: 0
                    },
                    scales: {
                        y: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                display: false
                            },
                            border: {
                                display: false
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                display: false
                            },
                            border: {
                                display: false
                            }
                        }
                    }
                },
        });

        const salesData = [
            { month: '01', summ: "2031" },
            { month: '02', summ: "2313" },
            { month: '03', summ: "1234" },
            { month: '04', summ: "4532" },
            { month: '05', summ: "3213" },
            { month: '06', summ: "4313" },
            { month: '07', summ: "5675" },
            { month: '08', summ: "5432" },
            { month: '09', summ: "4910" },

        ];

        function getMonthName(monthNumber) {
            const date = new Date();
            date.setMonth(monthNumber - 1);

            return date.toLocaleString('uk-UK', { month: 'short' });
        }

        salesData.forEach(function(sale) {
            sale.month = getMonthName(sale.month);
        });

        new Chart(
            document.getElementById("lead-sales"), {
                type: 'line',
                data: {
                    labels: salesData.map(row => row.month),
                    datasets: [{
                        label: 'UAH',
                        data: salesData.map(row => row.summ),
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.3,
                        pointRadius: 6
                    }]
                },
                options: {
                    animation: {
                        duration: 0
                    },
                    plugins: {
                        legend: {
                            position: 'bottom',
                            align: 'center',
                            fullSize: true,
                        }
                    }
                }
        });

    </script>

    <!-- EXPAND CARD -->
    <script>

        const icons = document.querySelectorAll(".expand-more");

        icons.forEach(function (icon) {
            icon.onclick = e => {
                e.preventDefault();

                const card = e.target.closest(".card");
                const details = card.querySelector(".card-details");

                e.target.classList.toggle("rotate");
                details.classList.toggle("expand-card-animation");
            }
        });
    </script>


    <script>

        // const menu = document.getElementById('menu');

        // menu.onclick = e => {
        //     if(menu.innerText === 'menu') {
        //         menu.innerText = 'close';
        //     } else {
        //         menu.innerText = `menu`;
        //     }

        // };
    </script>
        
</x-app-layout>