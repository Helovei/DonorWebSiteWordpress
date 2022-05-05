let switch_btn = document.getElementById("switch-btn");
switch_btn.addEventListener("click", () => {
    switch_btn.classList.toggle("switch_on");
    let label = document.getElementById("switch-label");
    if (switch_btn.classList.item(1) === "switch_on") {
        label.innerText = "Для иностранных граждан"
    } else label.innerText = "Для граждан РБ"
    let service_list = document.getElementsByClassName('service-item');
    for (let i = 0; i< service_list.length; i++) {
        let found_service_item = service_list[i].getElementsByClassName('service-item__price');
        found_service_item[0].classList.toggle('service-item__price_hidden')
        found_service_item[1].classList.toggle('service-item__price_hidden')
    }
})