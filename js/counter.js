$(".box-text__value").each(function () {
    var $this = $(this),
        countTo = $this.attr("data-count");
    $({
        countNum: $this.text(),
    }).animate(
        {
            countNum: countTo,
        },
        {
            duration: 5000,
            easing: "swing",
            step: function () {
                $this.text(Math.floor(this.countNum));
            },
            complete: function () {
                $this.text(this.countNum);
            },
        }
    );
});
