<section id="date-filter" class = "buttons">
    <ul>
        <li data-action="today">Сьогодні</li>
        <li data-action="yesterday">Вчора</li>
        <li data-action="week">Неділя</li>
        <li data-action="month">Місяць</li>
        <li data-action="quarter">Квартал</li>
    </ul>
</section>

<script>

    const buttons = document.querySelectorAll('.buttons');

    //const filter = document.getElementById('date-filter');

    buttons.forEach(button => {
        const options = button.querySelectorAll('li');

        options.forEach(function(item) {
            item.onclick = e => {
                e.preventDefault();
                if(e.target.classList.contains("checked")) {
                    e.target.classList.remove("checked"); 
                    //console.log(get_filter_value("_"));

                    console.log("all");

                } else {
                    e.target.classList.add("checked"); 
                    console.log(e.target.dataset.action);
                }
                
                for(let opt of options) {
                    if(opt !== e.target) {
                        opt.classList.remove("checked");
                    }
                }
            }
        });
    });
    
    
</script>