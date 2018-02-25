
    var today = new Date();
    var year = today.getFullYear();
    var month = today.getMonth();
    var day = today.getDay();
    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
    var monthStart;
    var lastMonthEnd;
    var startDay;
    var monthEnd;

    function monthSet(mon) {
        month = mon;
        createDate();
    }

    function yearSet(yr) {
        year = yr;
        createDate();
    }

    function firstWeek(d) {
        if (d>7) {
            month = month - 1;
            year = month < 0 ? year-1 : year;
            month = month < 0 ? 11 : month;
            createDate();
        }
        daySet(d);
    }

    function lastWeeks(d) {
        if (d<23) {
            month = month + 1;
            year = month > 11 ? year+1 : year;
            month = month > 11 ? 0 : month;
            createDate();
        }
        daySet(d);
    }

    function daySet(da) {
        day = da;
        createDate();
    }

    function createDate() {
        setDate = new Date(year, month, day);
        monthStart = new Date(year, month, 1);
        lastMonthEnd = new Date(year, month, 1-1);
        monthEnd = new Date(year, month+1, 1-1);
        document.getElementById("month").innerHTML = monthNames[month];
        document.getElementById("year").innerHTML = year;
        a = setDate.getDate();
        b = setDate.getDay();
        document.getElementById("date").innerHTML = dayNames[b] + ' ' + a + ' ' + monthNames[month] + ' ' + year;
        calSetup();
    }

    function calSetup() {
        a = lastMonthEnd.getDate();
        if (monthStart.getDay() === 1) {
            startDay = 'Mo';
            document.getElementById("Mo1").innerHTML = 1;
            document.getElementById("Mo1").style.color = "black";
            document.getElementById("Tu1").innerHTML = 2;
            document.getElementById("Tu1").style.color = "black";
            document.getElementById("We1").innerHTML = 3;
            document.getElementById("We1").style.color = "black";
            document.getElementById("Th1").innerHTML = 4;
            document.getElementById("Th1").style.color = "black";
            document.getElementById("Fr1").innerHTML = 5;
            document.getElementById("Fr1").style.color = "black";
            document.getElementById("Sa1").innerHTML = 6;
            document.getElementById("Sa1").style.color = "black";
            document.getElementById("Su1").innerHTML = 7;
        }
        if (monthStart.getDay() === 2) {
            startDay = 'Tu';
            document.getElementById("Mo1").innerHTML = a;
            document.getElementById("Mo1").style.color = "grey";
            document.getElementById("Tu1").innerHTML = 1;
            document.getElementById("Tu1").style.color = "black";
            document.getElementById("We1").innerHTML = 2;
            document.getElementById("We1").style.color = "black";
            document.getElementById("Th1").innerHTML = 3;
            document.getElementById("Th1").style.color = "black";
            document.getElementById("Fr1").innerHTML = 4;
            document.getElementById("Fr1").style.color = "black";
            document.getElementById("Sa1").innerHTML = 5;
            document.getElementById("Sa1").style.color = "black";
            document.getElementById("Su1").innerHTML = 6;
        }
        if (monthStart.getDay() === 3) {
            startDay = 'We';
            document.getElementById("Mo1").innerHTML = a-1;
            document.getElementById("Mo1").style.color = "grey";
            document.getElementById("Tu1").innerHTML = a;
            document.getElementById("Tu1").style.color = "grey";
            document.getElementById("We1").innerHTML = 1;
            document.getElementById("We1").style.color = "black";
            document.getElementById("Th1").innerHTML = 2;
            document.getElementById("Th1").style.color = "black";
            document.getElementById("Fr1").innerHTML = 3;
            document.getElementById("Fr1").style.color = "black";
            document.getElementById("Sa1").innerHTML = 4;
            document.getElementById("Sa1").style.color = "black";
            document.getElementById("Su1").innerHTML = 5;
        }
        if (monthStart.getDay() === 4) {
            startDay = 'Th';
            document.getElementById("Mo1").innerHTML = a-2;
            document.getElementById("Mo1").style.color = "grey";
            document.getElementById("Tu1").innerHTML = a-1;
            document.getElementById("Tu1").style.color = "grey";
            document.getElementById("We1").innerHTML = a;
            document.getElementById("We1").style.color = "grey";
            document.getElementById("Th1").innerHTML = 1;
            document.getElementById("Th1").style.color = "black";
            document.getElementById("Fr1").innerHTML = 2;
            document.getElementById("Fr1").style.color = "black";
            document.getElementById("Sa1").innerHTML = 3;
            document.getElementById("Sa1").style.color = "black";
            document.getElementById("Su1").innerHTML = 4;
        }
        if (monthStart.getDay() === 5) {
            startDay = 'Fr';
            document.getElementById("Mo1").innerHTML = a-3;
            document.getElementById("Mo1").style.color = "grey";
            document.getElementById("Tu1").innerHTML = a-2;
            document.getElementById("Tu1").style.color = "grey";
            document.getElementById("We1").innerHTML = a-1;
            document.getElementById("We1").style.color = "grey";
            document.getElementById("Th1").innerHTML = a;
            document.getElementById("Th1").style.color = "grey";
            document.getElementById("Fr1").innerHTML = 1;
            document.getElementById("Fr1").style.color = "black";
            document.getElementById("Sa1").innerHTML = 2;
            document.getElementById("Sa1").style.color = "black";
            document.getElementById("Su1").innerHTML = 3;
        }
        if (monthStart.getDay() === 6) {
            startDay = 'Sa';
            document.getElementById("Mo1").innerHTML = a-4;
            document.getElementById("Mo1").style.color = "grey";
            document.getElementById("Tu1").innerHTML = a-3;
            document.getElementById("Tu1").style.color = "grey";
            document.getElementById("We1").innerHTML = a-2;
            document.getElementById("We1").style.color = "grey";
            document.getElementById("Th1").innerHTML = a-1;
            document.getElementById("Th1").style.color = "grey";
            document.getElementById("Fr1").innerHTML = a;
            document.getElementById("Fr1").style.color = "grey";
            document.getElementById("Sa1").innerHTML = 1;
            document.getElementById("Su1").innerHTML = 2;
        }
        if (monthStart.getDay() === 0) {
            startDay = 'Su';
            document.getElementById("Mo1").innerHTML = a-5;
            document.getElementById("Mo1").style.color = "grey";
            document.getElementById("Tu1").innerHTML = a-4;
            document.getElementById("Tu1").style.color = "grey";
            document.getElementById("We1").innerHTML = a-3;
            document.getElementById("We1").style.color = "grey";
            document.getElementById("Th1").innerHTML = a-2;
            document.getElementById("Th1").style.color = "grey";
            document.getElementById("Fr1").innerHTML = a-1;
            document.getElementById("Fr1").style.color = "grey";
            document.getElementById("Sa1").innerHTML = a;
            document.getElementById("Sa1").style.color = "grey";
            document.getElementById("Su1").innerHTML = 1;
        };
        populate();
    }

    function populate() {
        b = monthEnd.getDate();
        if (startDay === 'Mo') {
a = 7;
};
if (startDay === 'Tu') {
a = 6;
};
if (startDay === 'We') {
a = 5;
};
if (startDay === 'Th') {
a = 4;
};
if (startDay === 'Fr') {
a = 3;
};
if (startDay === 'Sa') {
a = 2;
};
if (startDay === 'Su') {
a = 1;
};
a = a + 1;
a = a > b ? 1 : a;
document.getElementById("Mo2").innerHTML = a;
a = a + 1;
a = a > b ? 1 : a;
document.getElementById("Tu2").innerHTML = a;
a = a + 1;
a = a > b ? 1 : a;
document.getElementById("We2").innerHTML = a;
a = a + 1;
a = a > b ? 1 : a;
document.getElementById("Th2").innerHTML = a;
a = a + 1;
a = a > b ? 1 : a;
document.getElementById("Fr2").innerHTML = a;
a = a + 1;
a = a > b ? 1 : a;
document.getElementById("Sa2").innerHTML = a;
a = a + 1;
a = a > b ? 1 : a;
document.getElementById("Su2").innerHTML = a;
a = a + 1;
a = a > b ? 1 : a;
document.getElementById("Mo3").innerHTML = a;
a = a + 1;
a = a > b ? 1 : a;
document.getElementById("Tu3").innerHTML = a;
a = a + 1;
a = a > b ? 1 : a;
document.getElementById("We3").innerHTML = a;
a = a + 1;
a = a > b ? 1 : a;
document.getElementById("Th3").innerHTML = a;
a = a + 1;
a = a > b ? 1 : a;
document.getElementById("Fr3").innerHTML = a;
a = a + 1;
a = a > b ? 1 : a;
document.getElementById("Sa3").innerHTML = a;
a = a + 1;
a = a > b ? 1 : a;
document.getElementById("Su3").innerHTML = a;
a = a + 1;
a = a > b ? 1 : a;
document.getElementById("Mo4").innerHTML = a;
a = a + 1;
a = a > b ? 1 : a;
document.getElementById("Tu4").innerHTML = a;
a = a + 1;
a = a > b ? 1 : a;
document.getElementById("We4").innerHTML = a;
a = a + 1;
a = a > b ? 1 : a;
document.getElementById("Th4").innerHTML = a;
a = a + 1;
a = a > b ? 1 : a;
document.getElementById("Fr4").innerHTML = a;
a = a + 1;
a = a > b ? 1 : a;
document.getElementById("Sa4").innerHTML = a;
a = a + 1;
a = a > b ? 1 : a;
document.getElementById("Su4").innerHTML = a;
if (a === b) {
    document.getElementById("Mo5").style.display = 'none';
    document.getElementById("Tu5").style.display = 'none';
    document.getElementById("We5").style.display = 'none';
    document.getElementById("Th5").style.display = 'none';
    document.getElementById("Sa5").style.display = 'none';
    document.getElementById("Su5").style.display = 'none';
    document.getElementById("Fr5").style.display = 'none';
}
else {
    if (a < 14) {
        document.getElementById("Mo5").style.display = 'none';
        document.getElementById("Tu5").style.display = 'none';
        document.getElementById("We5").style.display = 'none';
        document.getElementById("Th5").style.display = 'none';
        document.getElementById("Fr5").style.display = 'none';
        document.getElementById("Sa5").style.display = 'none';
        document.getElementById("Su5").style.display = 'none';
    }
    else {
        document.getElementById("Mo5").style.display = 'block';
        document.getElementById("Tu5").style.display = 'block';
        document.getElementById("We5").style.display = 'block';
        document.getElementById("Th5").style.display = 'block';
        document.getElementById("Fr5").style.display = 'block';
        document.getElementById("Sa5").style.display = 'block';
        document.getElementById("Su5").style.display = 'block';
    }
}
a = a + 1;
document.getElementById("Mo5").style.color = a > b ? "grey" : a < 7 ? "grey" :"black";
a = a > b ? 1 : a;
document.getElementById("Mo5").innerHTML = a;
a = a + 1;
document.getElementById("Tu5").style.color = a > b ? "grey" : a < 7 ? "grey" :"black";
a = a > b ? 1 : a;
document.getElementById("Tu5").innerHTML = a;
a = a + 1;
document.getElementById("We5").style.color = a > b ? "grey" : a < 7 ? "grey" :"black";
a = a > b ? 1 : a;
document.getElementById("We5").innerHTML = a;
a = a + 1;
document.getElementById("Th5").style.color = a > b ? "grey" : a < 7 ? "grey" :"black";
a = a > b ? 1 : a;
document.getElementById("Th5").innerHTML = a;
a = a + 1;
document.getElementById("Fr5").style.color = a > b ? "grey" : a < 7 ? "grey" :"black";
a = a > b ? 1 : a;
document.getElementById("Fr5").innerHTML = a;
a = a + 1;
document.getElementById("Sa5").style.color = a > b ? "grey" : a < 7 ? "grey" :"black";
a = a > b ? 1 : a;
document.getElementById("Sa5").innerHTML = a;
a = a + 1;
document.getElementById("Su5").style.color = a > b ? "grey" : a < 7 ? "grey" :"black";
a = a > b ? 1 : a;
document.getElementById("Su5").innerHTML = a;
if (a === b) {
    document.getElementById("Mo6").style.display = 'none';
    document.getElementById("Tu6").style.display = 'none';
    document.getElementById("We6").style.display = 'none';
    document.getElementById("Th6").style.display = 'none';
    document.getElementById("Fr6").style.display = 'none';
    document.getElementById("Sa6").style.display = 'none';
    document.getElementById("Su6").style.display = 'none';
}
else {
    if (a < 14) {
        document.getElementById("Mo6").style.display = 'none';
        document.getElementById("Tu6").style.display = 'none';
        document.getElementById("We6").style.display = 'none';
        document.getElementById("Th6").style.display = 'none';
        document.getElementById("Fr6").style.display = 'none';
        document.getElementById("Sa6").style.display = 'none';
        document.getElementById("Su6").style.display = 'none';
    }
    else {
        document.getElementById("Mo6").style.display = 'block';
        document.getElementById("Tu6").style.display = 'block';
        document.getElementById("We6").style.display = 'block';
        document.getElementById("Th6").style.display = 'block';
        document.getElementById("Fr6").style.display = 'block';
        document.getElementById("Sa6").style.display = 'block';
        document.getElementById("Su6").style.display = 'block';
    }
}
a = a + 1;
document.getElementById("Mo6").style.color = a > b ? "grey" : a < 7 ? "grey" :"black";
a = a > b ? 1 : a;
document.getElementById("Mo6").innerHTML = a;
a = a + 1;
document.getElementById("Tu6").style.color = a > b ? "grey" : a < 7 ? "grey" :"black";
a = a > b ? 1 : a;
document.getElementById("Tu6").innerHTML = a;
a = a + 1;
document.getElementById("We6").style.color = a > b ? "grey" : a < 7 ? "grey" :"black";
a = a > b ? 1 : a;
document.getElementById("We6").innerHTML = a;
a = a + 1;
document.getElementById("Th6").style.color = a > b ? "grey" : a < 7 ? "grey" :"black";
a = a > b ? 1 : a;
document.getElementById("Th6").innerHTML = a;
a = a + 1;
document.getElementById("Fr6").style.color = a > b ? "grey" : a < 7 ? "grey" :"black";
a = a > b ? 1 : a;
document.getElementById("Fr6").innerHTML = a;
a = a + 1;
document.getElementById("Sa6").style.color = a > b ? "grey" : a < 7 ? "grey" :"black";
a = a > b ? 1 : a;
document.getElementById("Sa6").innerHTML = a;
a = a + 1;
document.getElementById("Su6").style.color = a > b ? "grey" : a < 7 ? "grey" :"black";
a = a > b ? 1 : a;
document.getElementById("Su6").innerHTML = a;
    }

    function dropMonth() {
        document.getElementById("yearDrop").classList.remove("show");
        document.getElementById("monthDrop").classList.toggle("show");
    }

    function dropYear() {
        document.getElementById("monthDrop").classList.remove("show");
        document.getElementById("yearDrop").classList.toggle("show");
    }

    window.onclick = function (event) {
        if (!event.target.matches('.dropbtn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    };