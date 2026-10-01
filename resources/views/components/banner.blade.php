<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Dragon Age Review</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <link
    rel="preconnect"
    href="https://fonts.googleapis.com"
  />
  <link
    rel="preconnect"
    href="https://fonts.gstatic.com"
    crossorigin
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@700;800&display=swap"
    rel="stylesheet"
  />

  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
            display: ['Playfair Display', 'serif'],
          },
        },
      },
    };
  </script>
</head>

<body class="m-0 min-h-screen bg-black font-sans text-white">

  <main class="mx-auto w-full max-w-[1220px] px-[2px] pt-[40px] py-0">

    <!-- Breadcrumbs -->
    <div
      class="flex h-[26px] items-center gap-[4px] text-[11px] font-[700] text-[#dedbe7]"
    >
      <a href="#" class="flex items-center gap-[3px] hover:text-white">
        <!-- Home icon -->
        <svg
          viewBox="0 0 24 24"
          class="h-[11px] w-[11px]"
          fill="none"
          stroke="currentColor"
          stroke-width="1.8"
          stroke-linecap="round"
          stroke-linejoin="round"
        >
          <path d="M3 10.5 12 3l9 7.5"></path>
          <path d="M5.5 9.5V21h13V9.5"></path>
        </svg>

        <span>Главная</span>
      </a>

      <span class="text-[#6f6b79]">/</span>

      <a href="#" class="hover:text-white">
        Статьи и лонгриды
      </a>

      <span class="text-[#6f6b79]">/</span>

      <a href="#" class="hover:text-white">
        Обзоры
      </a>

      <span class="text-[#6f6b79]">/</span>

      <span class="text-[#e4e1ea]">
        Обзор Dragon Age: The Veilguard
      </span>
    </div>

    <!-- Tags -->
    <div class="mt-[13px] flex items-center gap-[7px]">
      <!-- Big review -->
      <div
        class="flex h-[21px] items-center rounded-full bg-[#aa73f7] px-[16px]
               text-[11px] font-[700] uppercase tracking-[0.4px] text-[#432061]"
      >
        Большой обзор
      </div>

      <!-- platforms -->
      <div
        class="flex h-[21px] items-center rounded-full bg-[#16303b] px-[12px]
               text-[11px] font-[500] text-[#59d9f4]"
      >
        PC / PS5 / Xbox Series X
      </div>

      <!-- completion time -->
      <div
        class="flex h-[21px] items-center gap-[5px] rounded-full bg-[#342d22] px-[11px]
               text-[11px] font-[600] text-[#e3a54b]"
      >
        <svg
          viewBox="0 0 24 24"
          class="h-[13px] w-[13px]"
          fill="none"
          stroke="currentColor"
          stroke-width="1.8"
          stroke-linecap="round"
          stroke-linejoin="round"
        >
          <circle cx="12" cy="12" r="8"></circle>
          <path d="M12 7.5v4.6l2.8 1.8"></path>
        </svg>

        <span>58 часов прохождения</span>
      </div>

      <!-- read time -->
      <div
        class="flex h-[21px] items-center gap-[5px] rounded-full bg-[#292a31] px-[11px]
               text-[11px] font-[600] text-[#c9c6d0]"
      >
        <svg
          viewBox="0 0 24 24"
          class="h-[13px] w-[13px]"
          fill="none"
          stroke="currentColor"
          stroke-width="1.8"
          stroke-linecap="round"
          stroke-linejoin="round"
        >
          <path d="M4.5 6.5h5.5a3 3 0 0 1 3 3v8H7.5a3 3 0 0 0-3 3z"></path>
          <path d="M19.5 6.5H14a3 3 0 0 0-3 3v8h5.5a3 3 0 0 1 3 3z"></path>
        </svg>

        <span>18 мин чтения</span>
      </div>
    </div>

    <!-- Title -->
    <h1
      class="mt-[27px] max-w-[1180px] font-display text-[52px] font-[800]
             leading-[1.14] tracking-[-1.3px] text-[#f0edf3]"
    >
      Обзор Dragon Age: The Veilguard — Возвращение<br />
      в Тедас сквозь призму яркого экшена и смелых<br />
      компромиссов
    </h1>

    <!-- Description -->
    <p
      class="mt-[15px] max-w-[900px] text-[17px] font-[400] leading-[30px]
             tracking-[-0.15px] text-[#d0ccd5]"
    >
      Спустя десять лет после Inquisition мы вернулись в мир древних богов и магии крови.
      Разбираемся,<br />
      стоило ли так долго ждать перезапуск легендарной саги BioWare.
    </p>

    <!-- Author / Share bar -->
    <div
      class="mt-[26px] flex h-[65px] w-full items-center justify-between
             rounded-[13px] bg-[#1b1d24] px-[25px]"
    >
      <!-- Author -->
      <div class="flex items-center">
        <!-- Avatar -->
        <div
          class="h-[44px] w-[44px] shrink-0 overflow-hidden rounded-full bg-[#2b2f3a]"
        >
          <img
            src="/img/avatar.jpg"
            alt="Алексей Соколов"
            class="h-full w-full object-cover"
          />
        </div>

        <!-- Author data -->
        <div class="ml-[11px]">
          <div class="flex items-center gap-[5px]">
            <span class="text-[14px] font-[700] text-[#f0edf4]">
              Алексей Соколов
            </span>

            <span class="h-[5px] w-[5px] rounded-full bg-[#57d6ee]"></span>

            <span class="text-[12px] font-[600] text-[#bb9be6]">
              Главный редактор / Эксперт по RPG
            </span>
          </div>

          <div
            class="mt-[1px] flex items-center gap-[5px] text-[12px] font-[400]
                   text-[#aaa7b2]"
          >
            <span>15 марта 2025</span>

            <span class="text-[#60616a]">•</span>

            <!-- comments -->
            <span class="flex items-center gap-[3px]">
              <svg
                viewBox="0 0 24 24"
                class="h-[13px] w-[13px]"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path d="M5 5.5h14v10H9l-4 3v-13Z"></path>
              </svg>

              <span>4.8k</span>
            </span>

            <span class="text-[#60616a]">•</span>

            <!-- views -->
            <span class="flex items-center gap-[3px]">
              <svg
                viewBox="0 0 24 24"
                class="h-[13px] w-[13px]"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path
                  d="M2.5 12s3.5-5 9.5-5 9.5 5 9.5 5-3.5 5-9.5 5-9.5-5-9.5-5Z"
                ></path>
                <circle cx="12" cy="12" r="2.2"></circle>
              </svg>

              <span>264</span>
            </span>
          </div>
        </div>
      </div>

      <!-- Actions -->
      <div class="flex items-center gap-[7px]">

        <!-- Telegram -->
        <button
          class="flex h-[31px] items-center gap-[7px] rounded-full bg-[#202129]
                 px-[14px] text-[12px] font-[600] text-[#dedbe4]
                 transition hover:bg-[#292b34]"
        >
          <svg
            viewBox="0 0 24 24"
            class="h-[14px] w-[14px]"
            fill="none"
            stroke="currentColor"
            stroke-width="1.7"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path d="m3 5 18 7-18 7 3-7-3-7Z"></path>
            <path d="m6 12 9-4"></path>
          </svg>

          <span>Telegram</span>
        </button>

        <!-- VK -->
        <button
          class="flex h-[31px] items-center gap-[7px] rounded-full bg-[#202129]
                 px-[14px] text-[12px] font-[600] text-[#dedbe4]
                 transition hover:bg-[#292b34]"
        >
          <svg
            viewBox="0 0 24 24"
            class="h-[14px] w-[14px]"
            fill="none"
            stroke="currentColor"
            stroke-width="1.7"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="18" cy="5" r="2"></circle>
            <circle cx="6" cy="12" r="2"></circle>
            <circle cx="18" cy="19" r="2"></circle>
            <path d="m8 11 8-5"></path>
            <path d="m8 13 8 5"></path>
          </svg>

          <span>VK</span>
        </button>

        <!-- Link -->
        <button
          class="flex h-[31px] items-center gap-[7px] rounded-full bg-[#202129]
                 px-[14px] text-[12px] font-[600] text-[#dedbe4]
                 transition hover:bg-[#292b34]"
        >
          <svg
            viewBox="0 0 24 24"
            class="h-[14px] w-[14px]"
            fill="none"
            stroke="currentColor"
            stroke-width="1.8"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <rect x="8" y="4" width="10" height="13" rx="1.5"></rect>
            <path d="M6 8H5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1"></path>
          </svg>

          <span>Ссылка</span>
        </button>

        <!-- Bookmark -->
        <button
          class="flex h-[31px] items-center gap-[7px] rounded-full bg-[#202129]
                 px-[14px] text-[12px] font-[600] text-[#e9ad49]
                 transition hover:bg-[#292b34]"
        >
          <svg
            viewBox="0 0 24 24"
            class="h-[14px] w-[14px]"
            fill="none"
            stroke="currentColor"
            stroke-width="1.8"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path d="M6.5 4.5h11v15L12 16.2l-5.5 3.3v-15Z"></path>
          </svg>

          <span>В закладки</span>
        </button>
      </div>
    </div>

  </main>

</body>
</html>