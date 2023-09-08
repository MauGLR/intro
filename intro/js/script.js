
    function scrollToSection(sectionId) {
    const element = document.getElementById(sectionId);
    if (element) {
    const offset = 20; // You can adjust the offset value as needed
    const bodyRect = document.body.getBoundingClientRect().top;
    const elementRect = element.getBoundingClientRect().top;
    const elementPosition = elementRect - bodyRect;
    window.scroll({
    behavior: 'smooth',
    top: elementPosition - offset,
});
}
}
