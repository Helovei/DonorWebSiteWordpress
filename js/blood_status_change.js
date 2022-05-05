let blood_status_list = document.getElementsByClassName("blood-status__indicator");
for (let i = 0; i < blood_status_list.length; i++) {
    let label = blood_status_list.item(i).getElementsByClassName("indicator__label").item(0)
    let blood_bar = blood_status_list.item(i).getElementsByClassName("indicator__scale_progress").item(0)
    let current_value = blood_bar.style.getPropertyValue("height")
    current_value = current_value.substring(0, current_value.length-1)
    if (current_value <= 30) {
        label.classList.toggle("indicator__label_green")
    } else if (current_value > 30 && current_value <= 70) {
        label.classList.toggle("indicator__label_yellow")
    } else label.classList.toggle("indicator__label_red")
}