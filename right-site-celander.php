
<div class="notice">
    <h2><span>দিনপুঞ্জি</span></h2>
    <div id="bangla-date" class="cleander">লোড হচ্ছে...</div>


</div>



<script>
  async function loadDate() {
    const today = new Date();

    // Bangla weekdays
    const weekdays = ["রবিবার", "সোমবার", "মঙ্গলবার", "বুধবার", "বৃহস্পতিবার", "শুক্রবার", "শনিবার"];
    const weekday = weekdays[today.getDay()];

    // Gregorian date in Bangla
    const options = { day: 'numeric', month: 'long', year: 'numeric' };
    const gregorian = today.toLocaleDateString('bn-BD', options);

    // Hijri Date using Aladhan API
    const hijriRes = await fetch(`https://api.aladhan.com/v1/gToH?date=${today.getDate()}-${today.getMonth() + 1}-${today.getFullYear()}`);
    const hijriData = await hijriRes.json();

    const hijriDay = hijriData.data.hijri.day;
    const hijriYear = hijriData.data.hijri.year;
    const hijriMonthNumber = hijriData.data.hijri.month.number;

    const hijriMonthNamesBn = [
      "", // index 0 not used
      "মুহাররম",
      "সফর",
      "রবিউল আউয়াল",
      "রবিউস সানি",
      "জুমাদাল উলা",
      "জুমাদাল উখরা",
      "রজব",
      "শাবান",
      "রমজান",
      "শাওয়াল",
      "জিলকদ",
      "জিলহজ"
    ];

    const hijriMonthBn = hijriMonthNamesBn[hijriMonthNumber];
    const hijriFinal = `${hijriDay}ই ${hijriMonthBn}, ${hijriYear} হিজরী`;

    // Bangla calendar (approximate)
    const banglaMonths = [
      "বৈশাখ", "জ্যৈষ্ঠ", "আষাঢ়", "শ্রাবণ", "ভাদ্র", "আশ্বিন",
      "কার্তিক", "অগ্রহায়ণ", "পৌষ", "মাঘ", "ফাল্গুন", "চৈত্র"
    ];

    const banglaSeasons = [
      "গ্রীষ্মকাল", "গ্রীষ্মকাল",   // বৈশাখ, জ্যৈষ্ঠ
      "বর্ষাকাল", "বর্ষাকাল",       // আষাঢ়, শ্রাবণ
      "শরৎকাল", "শরৎকাল",          // ভাদ্র, আশ্বিন
      "হেমন্তকাল", "হেমন্তকাল",    // কার্তিক, অগ্রহায়ণ
      "শীতকাল", "শীতকাল",          // পৌষ, মাঘ
      "বসন্তকাল", "বসন্তকাল"       // ফাল্গুন, চৈত্র
    ];

    const banglaDay = today.getDate(); // approximate
    const banglaMonth = banglaMonths[(today.getMonth() + 9) % 12]; // rough mapping
    const banglaYear = today.getFullYear() - 593; // approximate
    const banglaSeason = banglaSeasons[(today.getMonth() + 9) % 12];

    const banglaFinal = `${banglaDay}ই ${banglaMonth}, ${banglaYear} বঙ্গাব্দ (${banglaSeason})`;

    // Final Output
    document.getElementById("bangla-date").innerHTML = `
        <ul>
            <li>আজ ${weekday}, ${gregorian} ইং</li>
            <li>${banglaFinal}</li>
            <li> ${hijriFinal} ইং</li>
        </ul>
     
    `;
  }

  loadDate();
</script>
<!-- <div class="notice" style="padding-top:10px;"> cleander   
	<h2><span>দিনপুঞ্জি</span></h2>
	<div class="cleander" style="overflow:hidden;">
		<?php //dynamic_sidebar('clender'); ?>
	</div>
</div> -->