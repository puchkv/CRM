<x-app-layout>

    @include('layouts.navbar')

    @include('layouts.navbar-mobile')

    <header>
        <h1>Ліди</h1>
    </header>

    <div class="wrapper">
        <section class="control-panel">

            <section class="left">
                <button class="add" id="add-item">
                    <i class="material-icons">
                        add_circle_outline
                    </i>
                    <span>Додати угоду</span>
                </button>

                <button class="default">
                    <i class="material-icons">
                        price_check
                    </i>
                    <span>Завершені угоди</span>
                </button>

                <button class="default">
                    <i class="material-icons">
                        settings
                    </i>
                    <span>Налаштування</span>
                </button>
            </section>

            <section class="right">
                <div class="switcher" id="view-switch">
                    <button class="view checked" id="column-btn">
                        <i class="material-icons">
                            view_column
                        </i>
                    </button>
                    <button class="view" id="list-btn">
                        <i class="material-icons">
                            view_list
                        </i>
                    </button>
                </div>
                <div class="search-box">
                    <input type="search" name="search" placeholder="Пошук...">
                    <i class="material-icons">search</i>
                </div>
            </section>  
        </section>

        <div class="container">
            <section class="viewport" id="viewport" data-view="list">
                <section class="card-table" id="list">
                    <table>
                        <tr>
                            <th>Назва</th>
                            <th>Статус</th>
                            <th>Замовник</th>
                            <th>Бюджет</th>
                            <th>Зареєстрував</th>
                            <th>Дата створення</th>
                        </tr>
                        <tr>
                            <td>Створення Веб-сайту</td>
                            <td><span class="status">Нові</span></td>
                            <td><a href="#">Валентина</a></td>
                            <td>20000 ₴</td>
                            <td><a href="#">Віталій</a></td>
                            <td>21 січня 2023 в 00:31</td>
                        </tr>
                        <tr>
                            <td>Дизайн UX/UI</td>
                            <td><span class="status">Перемовини</span></td>
                            <td><a href="#">Шумко Денис</a></td>
                            <td>6500 ₴</td>
                            <td><a href="#">Павел</a></td>
                            <td>21 січня 2023 в 00:31</td>
                        </tr>
                        <tr>
                            <td>Створити спеціфікацію на розробку</td>
                            <td><span class="status">Передзвон</span></td>
                            <td><a href="#">Андрій</a></td>
                            <td>20000 ₴</td>
                            <td><a href="#">Admin</a></td>
                            <td>21 січня 2023 в 00:31</td>
                        </tr>
                        <tr>
                            <td>Створення Веб-сайту</td>
                            <td><span class="status">Нові</span></td>
                            <td><a href="#">Валентина</a></td>
                            <td>20000 ₴</td>
                            <td><a href="#">Віталій</a></td>
                            <td>21 січня 2023 в 00:31</td>
                        </tr>
                        <tr>
                            <td>Дизайн UX/UI</td>
                            <td><span class="status">Перемовини</span></td>
                            <td><a href="#">Шумко Денис</a></td>
                            <td>6500 ₴</td>
                            <td><a href="#">Павел</a></td>
                            <td>21 січня 2023 в 00:31</td>
                        </tr>
                        <tr>
                            <td>Створити спеціфікацію на розробку</td>
                            <td><span class="status">Передзвон</span></td>
                            <td><a href="#">Андрій</a></td>
                            <td>20000 ₴</td>
                            <td><a href="#">Admin</a></td>
                            <td>21 січня 2023 в 00:31</td>
                        </tr>
                        <tr>
                            <td>Створення Веб-сайту</td>
                            <td><span class="status">Нові</span></td>
                            <td><a href="#">Валентина</a></td>
                            <td>20000 ₴</td>
                            <td><a href="#">Віталій</a></td>
                            <td>21 січня 2023 в 00:31</td>
                        </tr>
                        <tr>
                            <td>Дизайн UX/UI</td>
                            <td><span class="status">Перемовини</span></td>
                            <td><a href="#">Шумко Денис</a></td>
                            <td>6500 ₴</td>
                            <td><a href="#">Павел</a></td>
                            <td>21 січня 2023 в 00:31</td>
                        </tr>
                        <tr>
                            <td>Створити спеціфікацію на розробку</td>
                            <td><span class="status">Передзвон</span></td>
                            <td><a href="#">Андрій</a></td>
                            <td>20000 ₴</td>
                            <td><a href="#">Admin</a></td>
                            <td>21 січня 2023 в 00:31</td>
                        </tr>
                        <tr>
                            <td>Створення Веб-сайту</td>
                            <td><span class="status">Нові</span></td>
                            <td><a href="#">Валентина</a></td>
                            <td>20000 ₴</td>
                            <td><a href="#">Віталій</a></td>
                            <td>21 січня 2023 в 00:31</td>
                        </tr>
                        <tr>
                            <td>Дизайн UX/UI</td>
                            <td><span class="status">Перемовини</span></td>
                            <td><a href="#">Шумко Денис</a></td>
                            <td>6500 ₴</td>
                            <td><a href="#">Павел</a></td>
                            <td>21 січня 2023 в 00:31</td>
                        </tr>
                        <tr>
                            <td>Створити спеціфікацію на розробку</td>
                            <td><span class="status">Передзвон</span></td>
                            <td><a href="#">Андрій</a></td>
                            <td>20000 ₴</td>
                            <td><a href="#">Admin</a></td>
                            <td>21 січня 2023 в 00:31</td>
                        </tr>
                    </table>
                </section>
        
                <section class="card-columns" id="column">
                    <div class="col" id="cat-new" data-index="1">
                        <div class="col-title">
                            <span>Нові</span>
                            <i class="material-icons">
                                settings
                            </i>
                        </div>
                        <div class="col-summary">
                            <span class="col-summary-count">13 угод:</span>
                            <span class="col-summary-sales">12349 ₴</span>
                        </div>
                        <div class="col-cards">
                            <div class = "card" id = "1" draggable="true">
                                <div class="card-title">
                                    <h5>Створення Веб-сайту</h5>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">query_builder</i>
                                    <span>1 січня 2023 в 00:02</span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">
                                        engineering
                                    </i>                                
                                    <span><a href="#" draggable="false">Юлія Пушкарьова</a></span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons green">
                                        payments
                                    </i>  
                                    <span class="sale-price">2000 ₴</span>
                                </div>
                            </div> 
                            
                            <div class = "card" id = "3" draggable="true">
                                <div class="card-title">
                                    <h5>Дизайн UX/UI</h5>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">query_builder</i>
                                    <span>1 січня 2023 в 00:02</span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">
                                        engineering
                                    </i>                                
                                    <span><a href="#" draggable="false">Валерія Глаузенхаузен</a></span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">
                                        payments
                                    </i>  
                                    <span class="sale-price">4300 ₴</span>
                                </div>
                            </div> 
                        </div>
                        <div class="add-more">
                            <i class="material-icons">
                                add
                            </i>
                            <span>Додати угоду</span>
                        </div>
                    </div>
                    <div class="col" id="cat-conversation" data-index="2">
                        <div class="col-title">
                            <span>Перемовини</span>
                            <i class="material-icons">
                                settings
                            </i>
                        </div>
                        <div class="col-summary">
                            <span class="col-summary-count">13 угод:</span>
                            <span class="col-summary-sales">12349 ₴</span>
                        </div>
                        <div class="col-cards">
                            <div class = "card" id = "1" draggable="true">
                                <div class="card-title">
                                    <h5>Створення Веб-сайту</h5>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">query_builder</i>
                                    <span>1 січня 2023 в 00:02</span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">
                                        engineering
                                    </i>                                
                                    <span><a href="#" draggable="false">Юлія Пушкарьова</a></span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons green">
                                        payments
                                    </i>  
                                    <span class="sale-price">2000 ₴</span>
                                </div>
                            </div> 
                            
                            <div class = "card" id = "3" draggable="true">
                                <div class="card-title">
                                    <h5>Дизайн UX/UI</h5>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">query_builder</i>
                                    <span>1 січня 2023 в 00:02</span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">
                                        engineering
                                    </i>                                
                                    <span><a href="#" draggable="false">Валерія Глаузенхаузен</a></span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">
                                        payments
                                    </i>  
                                    <span class="sale-price">4300 ₴</span>
                                </div>
                            </div> 
                        </div>
                        <div class="add-more">
                            <i class="material-icons">
                                add
                            </i>
                            <span>Додати угоду</span>
                        </div>
                    </div>
                    <div class="col" id="cat-recall" data-index="3">
                        <div class="col-title">
                            <span>Передзвон</span>
                            <i class="material-icons">
                                settings
                            </i>
                        </div>
                        <div class="col-summary">
                            <span class="col-summary-count">13 угод:</span>
                            <span class="col-summary-sales">12349 ₴</span>
                        </div>
                        <div class="col-cards">
                            <div class = "card" id = "1" draggable="true">
                                <div class="card-title">
                                    <h5>Створення Веб-сайту</h5>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">query_builder</i>
                                    <span>1 січня 2023 в 00:02</span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">
                                        engineering
                                    </i>                                
                                    <span><a href="#" draggable="false">Юлія Пушкарьова</a></span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons green">
                                        payments
                                    </i>  
                                    <span class="sale-price">2000 ₴</span>
                                </div>
                            </div> 
                            
                            <div class = "card" id = "3" draggable="true">
                                <div class="card-title">
                                    <h5>Дизайн UX/UI</h5>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">query_builder</i>
                                    <span>1 січня 2023 в 00:02</span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">
                                        engineering
                                    </i>                                
                                    <span><a href="#" draggable="false">Валерія Глаузенхаузен</a></span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">
                                        payments
                                    </i>  
                                    <span class="sale-price">4300 ₴</span>
                                </div>
                            </div> 
                        </div>
                        <div class="add-more">
                            <i class="material-icons">
                                add
                            </i>
                            <span>Додати угоду</span>
                        </div>
                    </div>
                    <div class="col" id="cat-review" data-index="4">
                        <div class="col-title">
                            <span>Перегляд</span>
                            <i class="material-icons">
                                settings
                            </i>
                        </div>
                        <div class="col-summary">
                            <span class="col-summary-count">13 угод:</span>
                            <span class="col-summary-sales">12349 ₴</span>
                        </div>
                        <div class="col-cards">
                            <div class = "card" id = "1" draggable="true">
                                <div class="card-title">
                                    <h5>Створення Веб-сайту</h5>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">query_builder</i>
                                    <span>1 січня 2023 в 00:02</span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">
                                        engineering
                                    </i>                                
                                    <span><a href="#" draggable="false">Юлія Пушкарьова</a></span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons green">
                                        payments
                                    </i>  
                                    <span class="sale-price">2000 ₴</span>
                                </div>
                            </div> 
                            
                            <div class = "card" id = "3" draggable="true">
                                <div class="card-title">
                                    <h5>Дизайн UX/UI</h5>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">query_builder</i>
                                    <span>1 січня 2023 в 00:02</span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">
                                        engineering
                                    </i>                                
                                    <span><a href="#" draggable="false">Валерія Глаузенхаузен</a></span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">
                                        payments
                                    </i>  
                                    <span class="sale-price">4300 ₴</span>
                                </div>
                            </div> 
                        </div>
                        <div class="add-more">
                            <i class="material-icons">
                                add
                            </i>
                            <span>Додати угоду</span>
                        </div>
                    </div>


                    <div class="col" id="cat-review" data-index="4">
                        <div class="col-title">
                            <span>Перегляд</span>
                            <i class="material-icons">
                                settings
                            </i>
                        </div>
                        <div class="col-summary">
                            <span class="col-summary-count">13 угод:</span>
                            <span class="col-summary-sales">12349 ₴</span>
                        </div>
                        <div class="col-cards">
                            <div class = "card" id = "1" draggable="true">
                                <div class="card-title">
                                    <h5>Створення Веб-сайту</h5>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">query_builder</i>
                                    <span>1 січня 2023 в 00:02</span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">
                                        engineering
                                    </i>                                
                                    <span><a href="#" draggable="false">Юлія Пушкарьова</a></span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons green">
                                        payments
                                    </i>  
                                    <span class="sale-price">2000 ₴</span>
                                </div>
                            </div> 
                            
                            <div class = "card" id = "3" draggable="true">
                                <div class="card-title">
                                    <h5>Дизайн UX/UI</h5>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">query_builder</i>
                                    <span>1 січня 2023 в 00:02</span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">
                                        engineering
                                    </i>                                
                                    <span><a href="#" draggable="false">Валерія Глаузенхаузен</a></span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">
                                        payments
                                    </i>  
                                    <span class="sale-price">4300 ₴</span>
                                </div>
                            </div> 
                        </div>
                        <div class="add-more">
                            <i class="material-icons">
                                add
                            </i>
                            <span>Додати угоду</span>
                        </div>
                    </div>
                    <div class="col" id="cat-review" data-index="4">
                        <div class="col-title">
                            <span>Перегляд</span>
                            <i class="material-icons">
                                settings
                            </i>
                        </div>
                        <div class="col-summary">
                            <span class="col-summary-count">13 угод:</span>
                            <span class="col-summary-sales">12349 ₴</span>
                        </div>
                        <div class="col-cards">
                            <div class = "card" id = "1" draggable="true">
                                <div class="card-title">
                                    <h5>Створення Веб-сайту</h5>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">query_builder</i>
                                    <span>1 січня 2023 в 00:02</span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">
                                        engineering
                                    </i>                                
                                    <span><a href="#" draggable="false">Юлія Пушкарьова</a></span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons green">
                                        payments
                                    </i>  
                                    <span class="sale-price">2000 ₴</span>
                                </div>
                            </div> 
                            
                            <div class = "card" id = "3" draggable="true">
                                <div class="card-title">
                                    <h5>Дизайн UX/UI</h5>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">query_builder</i>
                                    <span>1 січня 2023 в 00:02</span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">
                                        engineering
                                    </i>                                
                                    <span><a href="#" draggable="false">Валерія Глаузенхаузен</a></span>
                                </div>
                                <div class="card-row">
                                    <i class="material-icons">
                                        payments
                                    </i>  
                                    <span class="sale-price">4300 ₴</span>
                                </div>
                            </div> 
                        </div>
                        <div class="add-more">
                            <i class="material-icons">
                                add
                            </i>
                            <span>Додати угоду</span>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </div>

    {{-- MOVING FROM LEFT CONTAINER FOR CREATING NEW LEAD, styles in leads.scss --}}

    <div class="overlay hidden" id="create_lead_overlay"></div>
    <section class="moving-container hidden closed" id="createLead">

        <div class="moving-container-header">
            <i class="material-icons" id="close-container">close</i>
            <input type="text" placeholder="Назва угоди..." />
            <select name="category" id="category">
                <option value="sites" selected>Сайти</option>
                <option value="design">Дизайн</option>
                <option value="marketing">Маркетинг</option>
                <option value="ad">Реклама</option>
                <option value="media">Медіа</option>
                <option value="other">Інше</option>
            </select>
        </div>

        <div class="moving-container-title">
            <div class="left">
                <i class="material-icons">
                    info_outline
                </i>
                <h4>Про угоду</h4>
            </div>
            <div class="right">
                <div class="input-w-select">
                    <input autocomplete="off" type="number" name="amount" value="0"/>
                    <select autocomplete="off" id="currencies"/>
                        <option value="UAH">UAH</option>
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="moving-container-details" id="create-lead-details">
            <div class="moving-container-details-row">
                <span>Джерело</span>
                <select name="category" id="category">
                    <option value="FB" selected>Facebook</option>
                    <option value="WAP">WhatsApp</option>
                    <option value="VIB">Viber</option>
                    <option value="INST">Instagram</option>
                </select>
            </div>

            <div class="moving-container-details-row">
                <span>Послуга</span>
                <input type="text" placeholder="Назва послуги..." />
            </div>

            <div class="moving-container-details-row">
                <span>Коментар</span>
                <textarea placeholder="Коментар..." maxlength="400"></textarea>
            </div>
        </div>
        <div class="add-row" id="create-lead-details-add-row">
            + Додати поле
        </div>

        <div class="moving-container-title">
            <i class="material-icons">contact_page</i>
            <h4>Контакт</h4>
        </div>

        <div class="moving-container-contact">
            <div class="moving-container-contact-row">
                <div class="custom-input-icon">
                    <i class="material-icons">person_outline</i>
                    <input type="text" placeholder="Ім'я" />
                    <input type="text" placeholder="Прізвище" />
                </div>
            </div>
            <div class="moving-container-contact-row">
                <div class="custom-input-icon">
                    <i class="material-icons">mail_outline</i>
                    <input type="email" placeholder="your.mail@example.com" />
                </div>
            </div>
            <div class="moving-container-contact-row">
                <div class="custom-input-tel">
                    <span>+380</span>
                    <input type="tel" placeholder="" />
                </div>
            </div>
        </div>

        <div class="add-contact" id="create-lead-add-contact">
            + Додати контакт
        </div>

        
        <button class="add">Додати угоду</button>
    </section>

    {{-- POPUP WINDOW FOR ADDING NEW ROW TO LEAD WHILE CREATING (popup.scss) --}}

    <div class="popup-container hidden" id="create-lead-add-row-popup">
        <div class="popup">
            <form id="popup-form-addrow">
                <div class="popup-row">
                    <label for="rowName">Назва поля</label>
                    <input type="text" autocomplete="off" name="rowName" id="rowName" minlength="3" required>
                </div>
                <div class="popup-row">
                    <label for="rowType">Тип поля</label>
                    <select name="rowType" id="rowType" disabled>
                        <option value="text" selected>Текст</option>
                        <option value="enum">Вибір</option>
                    </select>
                </div>
                <div class="popup-row direction-row nowrap">
                    <input type="checkbox" name="rowSave" id="rowSave">
                    <label class="custom" for="rowSave">Зберегти на майбутнє (буде відображатись кожен раз при створенні угоди)</label>
                </div>
                <div class="popup-row">
                    <button type="submit" class="add" id="submitRow">Додати поле</button>
                </div>
            </form>
        </div>
    </div>



    <section class="col-settings">
        <!-- поля: 
            название категории, 
            цвет плашки, 
            видимость, 
            заблокировать для редактирования,
         -->
    </section>


    <div class="overlay hidden" id="view_lead_overlay"></div>
    <section class="moving-container closed hidden" id="viewLead">

        <div class="moving-container-header pd-bottom-0">
            <div class="title-row">
                <h4>Metinvest holding LLC</h4>    
                <i class="material-icons" id="close-lead-view">close</i>
            </div>

            <div class="panel">
                <div class="panel-left">
                    <label for="category">Категорія</label>
                    <select name="category" id="category">
                        <option value="sites" selected>Сайти</option>
                        <option value="design">Дизайн</option>
                        <option value="marketing">Маркетинг</option>
                        <option value="ad">Реклама</option>
                        <option value="media">Медіа</option>
                        <option value="other">Інше</option>
                    </select>
                </div>
                <div class="panel-right">
                    <button class="white-with-shadow green" title="Завершити угоду">
                        <i class="material-icons">done</i>
                        <span>Завершити</span>
                    </button>
                    <button class="white-with-shadow" title="Редагувати угоду">
                        <i class="material-icons">edit</i>
                    </button>
  
                    <button class="white-with-shadow red" title="Видалити (в архів)">
                        <i class="material-icons">delete</i>
                    </button>
                </div>
            </div>

            <ul class="tabs" id="tabs">
                <li class="active">Загальні</li>
                <li>Завдання</li>
                <li>Оплати</li>
                <li>Доступи</li>
                <li>Коментарі</li>
                <li>Інше</li>
            </ul>  
        </div>

        <div class="inner-container">
            <section class="left">
                <div class="moving-container-title">
                    <div class="left">
                        <i class="material-icons">
                            info_outline
                        </i>
                        <h4>Про угоду</h4>
                    </div>
                    <div class="right">
                        <div class="input-w-select">
                            <input autocomplete="off" type="number" name="amount"/>
                            <select autocomplete="off" id="currencies"/>
                                <option value="UAH">UAH</option>
                                <option value="USD">USD</option>
                                <option value="EUR">EUR</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="moving-container-details" id="create-lead-details">
                    <div class="moving-container-details-row">
                        <span>Джерело</span>
                        <select name="category" id="category" disabled>
                            <option value="FB" selected>Facebook</option>
                            <option value="WAP">WhatsApp</option>
                            <option value="VIB">Viber</option>
                            <option value="INST">Instagram</option>
                        </select>
                    </div>
        
                    <div class="moving-container-details-row">
                        <span>Послуга</span>
                        <div>Додаткові</div>
                    </div>
        
                    <div class="moving-container-details-row">
                        <span>Переписка</span>
                        <div>Telegram</div>
                    </div>
        
                    <div class="moving-container-details-row">
                        <span>www</span>
                        <div><a href="#">https://example.com</a></div>
                    </div>
        
                    <div class="moving-container-details-row">
                        <span>Фактури</span>
                        <div>1123738, 1033033, 2080342</div>
                    </div>
        
                    <div class="moving-container-details-row">
                        <span>Коментар</span>
                        <div>Технічна підтримка протягом 1 року, а якщо буде багато тексту то буде відображатись наступним чином, тому що тому</div>
                    </div>
                </div>
                <div class="add-row" id="create-lead-details-add-row">
                    + Додати поле
                </div>
        
                <div class="moving-container-title">
                    <i class="material-icons">contact_page</i>
                    <h4>Контакт</h4>
                </div>

                <div class="moving-container-contact-view">
                    <div class="moving-container-contact-view-custom-row">
                        <i class="material-icons" id="contact-sensetive-btn" title="Приховати чутливі дані">visibility</i>
                    </div>
                    <div class="contact">
                        <legend><a href="#">Ірина Менеджер</a></legend>
                        <span class="sensetive">iryna.manager@agrosystem.com.ua</span>
                        <span class="sensetive">+380669451535</span>
                    </div>
                    
                </div>
        
                <div class="add-contact" id="create-lead-add-contact">
                    + Додати контакт
                </div>
        
            </section>
            
            <section class="right">
                <div class="moving-container-title">
                    <i class="material-icons">mode_comment</i>
                    <h4>Коментар</h4>
                </div>
                <div class="moving-container-details">
                    <textarea id="lead-add-comment" placeholder="Напишіть щось..."></textarea>
                    <button class="add" style="align-self:flex-end">Відправити</button>
                </div>

                <div class="moving-container-title">
                    <i class="material-icons">history</i>
                    <h4>Історія</h4>
                </div>
                <div class="moving-container-details">
                    <section class="history">
                        <ul>
                            <li>
                                <div>
                                    <i class="material-icons done">done</i>
                                    <span class="author">Адміністратор</span>
                                    <span class="action">Закрив угоду</span>
                                    <span class="date">12:15, 3 лютого 2023</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <i class="material-icons remove">remove</i>
                                    <span class="author">Cергій</span>
                                    <span class="action">Видалив поле "Договір"</span>
                                    <span class="date">02:00, 2 лютого 2023</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <i class="material-icons edit">edit</i>
                                    <span class="author">Олександр Володимирович</span>
                                    <span class="action">Змінив поле "Назва угоди" на METINVEST HOLDING LLC</span>
                                    <span class="date">12:15, 31 січня 2023</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <i class="material-icons add">person_add</i>
                                    <span class="author">Admin</span>
                                    <span class="action">Додав новий контакт</span>
                                    <span class="date">03:12, 3 лютого 2023</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <i class="material-icons remove">person_remove</i>
                                    <span class="author">Eugene</span>
                                    <span class="action">Видалив контакт</span>
                                    <span class="date">01:02, 3 лютого 2023</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <i class="material-icons add">person_add</i>
                                    <span class="author">Admin</span>
                                    <span class="action">Додав новий контакт</span>
                                    <span class="date">03:12, 3 лютого 2023</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <i class="material-icons remove">person_remove</i>
                                    <span class="author">Eugene</span>
                                    <span class="action">Видалив контакт</span>
                                    <span class="date">01:02, 3 лютого 2023</span>
                                </div>
                            </li>
                            
                        </ul>
                        <a href="#">Завантажити ще...</a>
                    </section>
                </div>
            </section>
        </div>
        <button class="add">Зберегти</button>   
        
    </section>



    <script src="{{ URL::asset('js/draggable.js'); }}"></script>
    <script src="{{ URL::asset('js/inputFilter.js'); }}"></script>
    <script src="{{ URL::asset('js/transliter.js'); }}"></script>
    <script src="{{ URL::asset('js/calendar.js'); }}"></script>

    <script>
    
        const draggable = new Draggable(document.querySelectorAll('.col-cards'), {
            draggableSelector: '.card',
            animation: 'anim'
        });
        
        draggable.init();

    </script>

    <script>

    </script>
    

    <script>

        const defaultView= 'column';
        
        const viewSwitcher = document.getElementById("view-switch");

        const viewColumnBtn = document.getElementById("column-btn");
        const viewListBtn = document.getElementById("list-btn");

        const viewPort = document.getElementById("viewport");
        const viewColumn = document.getElementById("column");
        const viewList = document.getElementById("list");

        switchView();

        viewColumnBtn.onclick = switchView;

        viewListBtn.onclick = switchView;

        function switchView() {
            if(viewPort.dataset.view === 'list') {
                viewPort.dataset.view = 'column';
                setView('column');
            } else {
                viewPort.dataset.view = 'list';
                setView('list');
            }
        }

        function setView(view) {
            if(view === 'column') {
                viewColumn.style.display = 'flex';
                viewList.style.display = 'none';
                viewColumnBtn.classList.add("checked");
                viewListBtn.classList.remove("checked");
            } else {
                viewListBtn.classList.add("checked");
                viewColumnBtn.classList.remove("checked");
                viewList.style.display = 'flex';
                viewColumn.style.display = 'none';
            }
        }

    </script>

    <script>

        calculateContainerHeight();         

        window.onresize = e => {
            calculateContainerHeight();
        }

        
        function calculateContainerHeight() {

            const header = document.querySelector("header");
            const control_panel = document.querySelector(".control-panel");
            const viewport = document.getElementById("viewport");

            const height = window.innerHeight 
                - (header.offsetHeight + control_panel.offsetHeight)
                - 60;

            viewport.style.height = `${height}px`;
        }

    </script>


    <script>

        const colorTags = {
            new: '#3aa8ef',
            createPaper: '#2dc6f5',
            invoice: '#54d0de',
            in_progress: '#46e4c0',
            final: '#ffa903',
            deal_won: '#7cd400',
            deal_lost: '#ff5751',
            closed: '#bc2c2c'
        }



    </script>


    <script>

        const addBtn = document.getElementById("add-item");

        const closeBtn = document.getElementById("close-container");
        const createLeadContainer = document.getElementById("createLead");
        const overlay = document.getElementById('create_lead_overlay');


        addBtn.onclick = () => openContainer(createLeadContainer, overlay);

        closeBtn.onclick = () => closeContainer(createLeadContainer, overlay);

        overlay.onclick = () => closeContainer(createLeadContainer, overlay);

        createLeadContainer.onanimationend = e => {
            closeAnimation(createLeadContainer, overlay);
        }

        function openContainer(container, overlay) {
            container.classList.remove('hidden')
            container.classList.remove('closed');
            container.classList.add('opened');
            overlay.classList.remove('hidden');
            overlay.classList.add('blur-in');
            document.body.style.overflow = 'hidden';
        }

        function closeContainer(container, overlay) {
            container.classList.remove('opened');
            overlay.classList.add('blur-out');
            container.classList.add('closed');
        }

        function closeAnimation(container, overlay) {
            if(container.classList.contains('closed')) {
                document.body.style.overflow = 'auto';
                container.classList.add('hidden');
                overlay.classList.add('hidden');
                overlay.classList.remove('blur-out');
                
            } else {
                overlay.classList.remove('blur-in');
            }
        }

    </script>


    <script>


        const columns = document.querySelectorAll('.col');

        updateColumnSummary(columns);

        let observer = new MutationObserver((mutation) => {
            updateColumnSummary(mutation.map((mutation) => mutation.target.parentElement));

            // UPDATE CARD CATEGORY :: FUTURE
            console.log('updated!');
        });

        columns.forEach(col => {
            const cards = col.querySelector('.col-cards');
            observer.observe(cards, {childList: true});
        });


        function updateColumnSummary(columns) {
            columns.forEach(col => {
                let sum = 0;

                const cards = col.querySelector('.col-cards');

                const count = col.querySelector(".col-summary-count");
                const sales = col.querySelector(".col-summary-sales");

                if(count != null) {
                    count.innerHTML = `${cards.children.length} 
                        ${num_word(cards.children.length, ['угода', 'угоди', 'угод'])}`;
                }

                for(let card of cards.children) {
                    let sale = card.querySelector('.sale-price');
                    sum += (sale === null) ? 0 : parseInt(sale.innerHTML.split(' ')); 
                }

                if(sales != null) {
                    sales.innerHTML = `${sum} ₴`;
                }
            });

        }

        function num_word(value, words){  
            value = Math.abs(value) % 100; 
            var num = value % 10;
            if(value > 10 && value < 20) return words[2]; 
            if(num > 1 && num < 5) return words[1];
            if(num == 1) return words[0]; 
            return words[2];
        }

    </script>

    <script>

        const addContactBtn = document.getElementById('create-lead-add-contact');

        addContactBtn.onclick = e => {
            
            const contacts = document.querySelectorAll('.moving-container-contact');

            const lastContact = contacts[contacts.length - 1];
            
            const newContact = lastContact.cloneNode(true);

            const container = addContactBtn.parentElement;

            container.insertBefore(newContact, addContactBtn);

        }
    </script>

    <script>

        const addRowBtn = document.getElementById('create-lead-details-add-row');
        const popup = document.getElementById('create-lead-add-row-popup');
        const form = document.getElementById('popup-form-addrow');

        addRowBtn.onclick = e => {
            const overlay = document.createElement('div');
            overlay.className = 'popup-overlay';
            document.body.appendChild(overlay);

            popup.classList.remove('hidden');

            overlay.onclick = function() {

                form.reset();
                popup.classList.add('hidden');
                document.body.removeChild(overlay);
            }

        }

        inputFilter(document.getElementById('rowName'), function(value) {
            return /^(?=.{0,40}$).[A-Za-zА-Яа-яёЁіІїЇ0-9']*((?!\s{2}).)*[A-Za-zА-Яа-яёЁіІїЇ0-9']*$/.test(value);
        }, "Дозволено вводити тільки символи (a-Z, а-Я, 0-9, -, ', макс. длина 40 симв.)");

        form.onsubmit = e => {
            e.preventDefault();

            const formData = new FormData(form); 
            const overlay = document.querySelector('.popup-overlay');
            const rowContainer = document.querySelector('.moving-container-details');

            const newRow = document.createElement('div');
            newRow.className = 'moving-container-details-row';

            const label = document.createElement('span');
            const input = document.createElement('input');

            input.type = 'text';

            newRow.appendChild(label);
            newRow.appendChild(input);
            rowContainer.appendChild(newRow);

            for(const [key, value] of formData) {

                switch(key) {
                    case 'rowName': {
                        input.placeholder = value;
                        label.innerText = value;
                        break;
                    }
                    case 'rowSave': {
                        break;
                    }
                    default: {
                        break;
                    }
                }

            }

            form.reset();
            popup.classList.add('hidden');
            document.body.removeChild(overlay);
 
        }

        const submitRow = document.getElementById('submitRow');

        // submitRow.onclick = e => {

        //     const form = popup.querySelector('form');
        //     const formData = new FormData(form);


            

        //     console.log(form);
        //     console.log(...formData);
        //     form.reset();
        // }

    </script>

<script>
    const menuOpen = document.getElementById('menu_open');
    const menuClose = document.getElementById('menu_close');
    const navbar = document.getElementById('aside-navbar');
    const menuOverlay = document.getElementById('menu_overlay');

    menuOpen.onclick = function(event) {
        navbar.classList.remove('hidden');
        navbar.classList.remove('closed');
        navbar.classList.add('opened');
        menuOverlay.classList.remove('hidden');
    };

    menuClose.onclick = function(event) {
        navbar.classList.remove('opened');
        navbar.classList.add('closed');
        menuOverlay.classList.add('hidden');
    }

    navbar.onanimationend = e => {
        if(navbar.classList.contains('closed')) {
            navbar.classList.add('hidden');
        }
    }


</script>
<script>

    const settingsButton = document.getElementById('open_settings');
    const settingsPopup = document.getElementById('settings-popup');
    const settingsNavbar = document.getElementById('navbar');

    settingsButton.onclick = e => {
        e.preventDefault();

        const buttonRect = settingsButton.getBoundingClientRect();
        
        if(settingsPopup.classList.contains('hidden')) {
            settingsPopup.classList.remove('hidden');
            settingsPopup.style.left = `${settingsNavbar.offsetWidth + 20}px`;
            settingsPopup.style.top = `${buttonRect.top - settingsPopup.offsetHeight/2}px`;
        } else {
            settingsPopup.classList.add('hidden');
        }

    }
    
</script>


<script>

    const viewLeadContainer = document.getElementById('viewLead');
    const leadCards = document.querySelectorAll('.col-cards');
    const closeLeadView = document.getElementById('close-lead-view');
    const viewLeadOverlay = document.getElementById('view_lead_overlay');

    leadCards.forEach(card => {
        card.onclick = e => {
            e.preventDefault();
            
            openContainer(viewLeadContainer, viewLeadOverlay);
        }
    });

    closeLeadView.onclick = () => closeContainer(viewLeadContainer, viewLeadOverlay);

    viewLeadOverlay.onclick = () => closeContainer(viewLeadContainer, viewLeadOverlay);

    viewLeadContainer.onanimationend = e => {
        closeAnimation(viewLeadContainer, viewLeadOverlay);
    }

    // viewLeadContainer.onanimationend = e => {
    //     if(viewLeadContainer.classList.contains('closed')) {
    //         document.body.style.overflow = 'auto';
    //         viewLeadContainer.classList.add('hidden');
    //         overlay.classList.add('hidden');
    //         overlay.classList.remove('blur-out');
            
    //     } else {
    //         overlay.classList.remove('blur-in');
    //     }
    // }




</script>

<script>

    const tabsRow = document.getElementById('tabs');
    const tabs = tabsRow.querySelectorAll("li");

    tabs.forEach(tab => {

        tab.onclick = e => {
            if(tab.classList.contains("active")) {
                return;
            } else {
                switchTab(tab);
            }
        }
    });

    function switchTab(selectedTab) {
        for(const tab of tabs) {
            if(tab != selectedTab) {
                tab.classList.remove('active');
            } else {
                tab.classList.add('active');
                
                // TODO: SWITCH TAB CONTAINERS
            }
        }
    }
</script>


<script>

    const sensetiveCollector = new Array();
    
    const sensBtn = document.getElementById('contact-sensetive-btn');

    const sensetiveData = document.querySelectorAll('.sensetive');

    sensBtn.onclick = e => {
        if(sensBtn.innerText === 'visibility') {
            
            sensBtn.innerText = 'visibility_off';

        } else {
            
            sensBtn.innerText = 'visibility';
        }

        // TODO: hide sensetive data;

    };


    // sensetiveData.forEach(data => {

    //     sensetiveCollector.push(data.innerText);
    //     data.innerText = replaceChars(data.innerText, '*');
    //     console.log(replaceChars(data.innerText, '*'));
        
    // });

    // function replaceChars(string, char) {
    //     for(let i = 4; i < string.length - 1; i++) {
    //         string.substring(0, i) + char + string.substring(i+1);

    //     }
    //     return string;
    // }

    // String.prototype.replaceAt = function(index, replacement) {
    //     return this.substring(0, index) + replacement + this.substring(index + replacement.length);
    // }

    // console.log(sensetiveCollector);

</script>


</x-app-layout>
