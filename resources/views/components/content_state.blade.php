<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Dragon Age: The Veilguard — Review</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

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

<body class="m-0 min-h-screen bg-black font-sans text-[#d9d7df]">

  <main class="mx-auto w-full max-w-[1180px] px-5 py-6">

    <div class="grid grid-cols-[240px_minmax(0,1fr)] gap-[34px]">

      <aside class="self-start">

        <div class="sticky top-5 space-y-4">

          <section
            class="rounded-[10px] border border-white/[0.04] bg-[#1d1f26] px-4 py-3"
          >
            <div
              class="flex items-center justify-between text-[10px] font-[600] uppercase tracking-[0.4px] text-[#aaa8b3]"
            >
              <span>Прогресс чтения</span>
              <span>0%</span>
            </div>

            <div class="mt-3 h-[3px] overflow-hidden rounded-full bg-[#343640]">
              <div class="h-full w-0 bg-[#ab7cff]"></div>
            </div>
          </section>

          <!-- Contents -->
          <section
            class="overflow-hidden rounded-[10px] border border-white/[0.04] bg-[#1d1f26]"
          >
            <div
              class="border-b border-white/[0.06] px-4 py-3 text-[11px] font-[600] text-[#d7d5de]"
            >
              <span class="mr-2 text-[#50d2e8]">☷</span>
              Содержание
            </div>

            <nav class="px-4 py-3">
              <a
                href="#intro"
                class="group flex gap-3 py-2 text-[10px] leading-[15px] text-[#c7c4ce]"
              >
                <span class="text-[#55d4e9]">01</span>

                <span class="group-hover:text-white">
                  Вступление: Десять лет ожиданий
                </span>
              </a>

              <a
                href="#world"
                class="group flex gap-3 py-2 text-[10px] leading-[15px] text-[#96949f]"
              >
                <span>02</span>
                <span class="group-hover:text-white">
                  Новый сеттинг: Больше света, меньше тьмы
                </span>
              </a>

              <a
                href="#companions"
                class="group flex gap-3 py-2 text-[10px] leading-[15px] text-[#96949f]"
              >
                <span>03</span>
                <span class="group-hover:text-white">
                  Спутники и сюжет
                </span>
              </a>

              <a
                href="#visual"
                class="group flex gap-3 py-2 text-[10px] leading-[15px] text-[#96949f]"
              >
                <span>04</span>
                <span class="group-hover:text-white">
                  Визуальный стиль и ПК
                </span>
              </a>

              <a
                href="#verdict"
                class="group flex gap-3 py-2 text-[10px] leading-[15px] text-[#96949f]"
              >
                <span>05</span>
                <span class="group-hover:text-white">
                  Итог и вердикт редакции
                </span>
              </a>
            </nav>
          </section>

          <section
            class="rounded-[10px] border border-white/[0.04] bg-[#1d1f26]"
          >
            <div
              class="border-b border-white/[0.06] px-4 py-3 text-[11px] font-[600] uppercase tracking-[0.5px] text-[#d9d6df]"
            >
              Досье проекта
            </div>

            <div class="space-y-[7px] px-4 py-3 text-[10px]">
              <div class="flex justify-between gap-3">
                <span class="text-[#8f8d98]">Разработчик:</span>
                <span class="text-right text-[#e4e1e8]">BioWare</span>
              </div>

              <div class="flex justify-between gap-3">
                <span class="text-[#8f8d98]">Издатель:</span>
                <span class="text-right text-[#e4e1e8]">Electronic Arts</span>
              </div>

              <div class="flex justify-between gap-3">
                <span class="text-[#8f8d98]">Движок:</span>
                <span class="text-right text-[#56d5e9]">Frostbite Engine 4</span>
              </div>

              <div class="flex justify-between gap-3">
                <span class="text-[#8f8d98]">Локализация:</span>
                <span class="text-right text-[#e4e1e8]">
                  Русские<br />
                  субтитры
                </span>
              </div>

              <div class="flex justify-between gap-3">
                <span class="text-[#8f8d98]">Тестовая система:</span>

                <span class="text-right text-[#e4e1e8]">
                  i7 14700K / RTX<br />
                  4080
                </span>
              </div>
            </div>
          </section>

        </div>
      </aside>

      <article class="min-w-0">

        <section id="intro">
          <h2
            class="font-display text-[28px] font-[800] leading-tight text-[#eeeaf2]"
          >
            01. Вступление: Десять лет ожиданий
          </h2>

          <div
            class="mt-4 space-y-4 text-[15px] leading-[1.72] text-[#d4d1da]"
          >
            <p>
              Десять лет — внушительный срок для индустрии видеоигр. За это
              время сменилось несколько поколений консолей, публика пересела
              целиком на цифровые магазины и подписки, а жанр RPG успел
              несколько раз переосмыслить собственные правила.
            </p>

            <p>
              Премьера The Veilguard воспринималась не просто как релиз
              очередной RPG, а как закономерный тест способности BioWare
              вернуться на позиции студии, формировавшей направление жанра.
            </p>

            <p>
              И главный вопрос, который формируется уже после первых десятков
              часов: да, игра работает, причём удивительно стабильно. Однако
              привычный мрачный эпос сменился более лёгким приключением.
            </p>
          </div>
        </section>


        <figure
          class="mt-6 overflow-hidden rounded-[10px] border border-white/[0.08] bg-[#1b1d24]"
        >
          <div class="relative">
            <img
              src="/img/state.jpg"
              alt="Minrathous"
              class="aspect-[16/8.3] w-full object-cover"
            />

            <div
              class="absolute left-4 top-4 rounded bg-black/55 px-2 py-1 text-[9px] text-white/80"
            >
              MINRATHOUS: The Serpent's Heart
            </div>
          </div>

          <figcaption
            class="flex items-center justify-between gap-6 border-t border-white/[0.05] px-4 py-2 text-[9px] text-[#9b98a3]"
          >
            <span>
              Панорама Минратоса впечатляет масштабом и неоновыми
              пропорциями древней магии Тевинтера.
            </span>

            <span class="shrink-0">
              BioWare / Electronic Arts
            </span>
          </figcaption>
        </figure>

        <!-- World -->
        <section id="world" class="mt-7">
          <h2
            class="font-display text-[24px] font-[800] text-[#ece9f0]"
          >
            02. Новый сеттинг: Больше света, меньше тьмы
          </h2>

          <div
            class="mt-4 space-y-4 text-[15px] leading-[1.72] text-[#d4d1da]"
          >
            <p>
              Тактическая пауза в её классическом понимании исчезла. Меню
              способностей теперь лишь слегка замедляет время, давая секунды
              сориентироваться и отдать распоряжения двум напарникам.
            </p>

            <p>
              Сам бой ощущается существенно динамичнее: уклонения, парирования,
              комбо и прямой контроль персонажа делают происходящее ближе к
              экшен-RPG, чем к привычному Dragon Age.
            </p>

            <p>
              Иногда это удачно перерабатывает старые механики, иногда вызывает
              ощущение, будто серия слишком далеко отошла от своих корней.
            </p>
          </div>
        </section>

        <blockquote
          class="mt-5 rounded-[9px] border border-white/[0.06] bg-[#202229] px-5 py-4"
        >
          <p
            class="font-display text-[13px] italic leading-[1.6] text-[#ddd9e1]"
          >
            «Это самая динамичная и кинематографичная игра серии, хотя ветеранам
            Origins придётся привыкнуть к новому темпу и отсутствию прямого
            управления отрядом».
          </p>

          <div class="mt-2 text-[9px] font-[600] text-[#4ed0e6]">
            — Из редакционного дневника прохождения
          </div>
        </blockquote>

        <section id="companions" class="mt-7">
          <h2
            class="font-display text-[24px] font-[800] text-[#ece9f0]"
          >
            03. Спутники и сюжет: Сила личных историй
          </h2>

          <div
            class="mt-4 space-y-4 text-[15px] leading-[1.72] text-[#d4d1da]"
          >
            <p>
              Что The Veilguard делает действительно хорошо — это персонажи.
              Каждый спутник ощущается частью команды, а не просто
              функциональной единицей.
            </p>

            <p>
              Диалоги зачастую короткие, но химия команды работает. Игра
              постепенно раскрывает истории каждого героя, позволяя
              эмоциональным моментам зарабатывать свой вес.
            </p>
          </div>

          <!-- Two images -->
          <div class="mt-5 grid grid-cols-2 gap-3">
            <figure
              class="overflow-hidden rounded-[8px] border border-white/[0.07] bg-[#1b1d24]"
            >
              <img
                src="/img/state_1.jpg"
                alt=""
                class="aspect-[16/9] w-full object-cover"
              />

              <figcaption
                class="px-3 py-2 text-[9px] leading-[13px] text-[#9d9aa4]"
              >
                Диалоговые сцены поставлены на уровне дорогих телесериалов.
              </figcaption>
            </figure>

            <figure
              class="overflow-hidden rounded-[8px] border border-white/[0.07] bg-[#1b1d24]"
            >
              <img
                src="/img/state_2.jpg"
                alt=""
                class="aspect-[16/9] w-full object-cover"
              />

              <figcaption
                class="px-3 py-2 text-[9px] leading-[13px] text-[#9d9aa4]"
              >
                Синергия спутников в бою создаёт сложные комбинации.
              </figcaption>
            </figure>
          </div>
        </section>

        <!-- Visual -->
        <section id="visual" class="mt-7">
          <h2
            class="font-display text-[24px] font-[800] text-[#ece9f0]"
          >
            04. Визуальный стиль и оптимизация на ПК
          </h2>

          <div
            class="mt-4 space-y-4 text-[15px] leading-[1.72] text-[#d4d1da]"
          >
            <p>
              Техническая составляющая — главный триумф релиза. Игра показывает
              большое количество деталей без серьёзных просадок производительности.
            </p>

            <p>
              На тестовой конфигурации с RTX 4080 в 4K с максимальными
              настройками игра стабильно держит высокую частоту кадров.
            </p>
          </div>

          <section
            class="mt-5 rounded-[10px] border border-white/[0.07] bg-[#1c1e25] p-4"
          >
            <div class="flex items-center justify-between">
              <span class="text-[11px] font-[600] text-[#dddbe2]">
                Средний FPS в 4K (Ultra + Ray Tracing)
              </span>

              <span
                class="text-[9px] font-[600] uppercase text-[#53d3e9]"
              >
                NEXUS Hardware Bench
              </span>
            </div>

            <div class="mt-4">
              <div class="flex justify-between text-[9px] text-[#bbb8c2]">
                <span>RTX 4090 24GB</span>
                <span class="text-[#52d4e8]">104 FPS</span>
              </div>

              <div class="mt-1 h-[7px] overflow-hidden rounded-full bg-[#30323a]">
                <div class="h-full w-full rounded-full bg-[#4fd3e7]"></div>
              </div>
            </div>

            <div class="mt-3">
              <div class="flex justify-between text-[9px] text-[#bbb8c2]">
                <span>RTX 4080 16GB</span>
                <span class="text-[#c6a6ff]">82 FPS</span>
              </div>

              <div class="mt-1 h-[7px] overflow-hidden rounded-full bg-[#30323a]">
                <div class="h-full w-[79%] rounded-full bg-[#b897ef]"></div>
              </div>
            </div>

            <div class="mt-3">
              <div class="flex justify-between text-[9px] text-[#bbb8c2]">
                <span>RX 7900 XTX 24GB</span>
                <span class="text-[#f0ac53]">71 FPS</span>
              </div>

              <div class="mt-1 h-[7px] overflow-hidden rounded-full bg-[#30323a]">
                <div class="h-full w-[68%] rounded-full bg-[#efad56]"></div>
              </div>
            </div>
          </section>
        </section>

        <div class="mt-5 grid grid-cols-2 gap-3">
          <section
            class="rounded-[10px] border border-[#37cde2]/20 bg-[#1c2026] p-5"
          >
            <h3 class="text-[14px] font-[700] text-[#53d7eb]">
              ♡ Понравилось:
            </h3>

            <ul
              class="mt-4 space-y-3 text-[11px] leading-[15px] text-[#c8c5cd]"
            >
              <li class="flex gap-2">
                <span class="text-[#56d4e9]">○</span>
                <span>Потрясающая арт-дизайн локаций Минратоса и глубинных троп</span>
              </li>

              <li class="flex gap-2">
                <span class="text-[#56d4e9]">○</span>
                <span>Глубоко прописанные личные квесты и взаимоотношения спутников</span>
              </li>

              <li class="flex gap-2">
                <span class="text-[#56d4e9]">○</span>
                <span>Отзывчивое, насыщенное спецэффектами экшен-сражение</span>
              </li>

              <li class="flex gap-2">
                <span class="text-[#56d4e9]">○</span>
                <span>Практически отсутствующие технические проблемы</span>
              </li>
            </ul>
          </section>

          <section
            class="rounded-[10px] border border-[#df8677]/20 bg-[#201e23] p-5"
          >
            <h3 class="text-[14px] font-[700] text-[#e58f7f]">
              ♡ Не понравилось
            </h3>

            <ul
              class="mt-4 space-y-3 text-[11px] leading-[15px] text-[#c8c5cd]"
            >
              <li class="flex gap-2">
                <span class="text-[#e58f7f]">○</span>
                <span>Фактическое исчезновение стратегической тактической глубины</span>
              </li>

              <li class="flex gap-2">
                <span class="text-[#e58f7f]">○</span>
                <span>Упрощённая экипировка и минимальное влияние характеристик</span>
              </li>

              <li class="flex gap-2">
                <span class="text-[#e58f7f]">○</span>
                <span>Спорные диалоговые колёса с недостаточной свободой выбора</span>
              </li>
            </ul>
          </section>

        </div>

        <section
          id="verdict"
          class="mt-5 overflow-hidden rounded-[11px] border border-white/[0.07] bg-[#1d1f26]"
        >
          <div class="grid grid-cols-[145px_minmax(0,1fr)]">

            <div
              class="flex flex-col items-center justify-center border-r border-white/[0.06] bg-[#22242b] px-5 py-6"
            >
              <div
                class="relative flex h-[78px] w-[78px] items-center justify-center rounded-full border-[6px] border-[#f2ad4b] text-[24px] font-[700] text-[#f2ad4b]"
              >
                8.5
              </div>

              <div
                class="mt-3 text-center text-[9px] font-[600] uppercase tracking-[0.35px] text-[#aaa7b1]"
              >
                Отличный результат
              </div>
            </div>

            <div class="p-5">
              <div
                class="text-[9px] font-[700] uppercase tracking-[0.5px] text-[#bda2e8]"
              >
                ◈ Вердикт редакции NEXUS
              </div>

              <h3
                class="mt-2 text-[22px] font-[700] text-[#f0edf4]"
              >
                Dragon Age: The Veilguard
              </h3>

              <p
                class="mt-3 text-[12px] leading-[18px] text-[#bbb8c1]"
              >
                BioWare сделала решительный шаг вперёд, отбросив груз былых
                амбиций ради создания сфокусированного, невероятно красивого и
                эмоционального приключения.
              </p>

              <p
                class="mt-3 text-[12px] leading-[18px] text-[#bbb8c1]"
              >
                Да, это больше не глубокая партийная RPG старой школы. Но как
                современное приключение The Veilguard отрабатывает каждый
                вложенный рубль.
              </p>

              <div
                class="mt-3 inline-flex rounded bg-[#0d1f27] px-2 py-1 text-[9px] font-[600] text-[#53d5e9]"
              >
                Кому понравится: фанатам кинематографичных action-RPG
              </div>
            </div>
          </div>
        </section>

        <section
          class="mt-4 flex items-center justify-between rounded-[8px] bg-[#1d1f26] px-4 py-3"
        >
          <span class="text-[10px] font-[600] text-[#bbb8c2]">
            Ваша оценка статьи:
          </span>

          <div class="flex gap-5 text-[10px] font-[600]">
            <button class="text-[#f2a846]">🔥 421</button>
            <button class="text-[#56d4e9]">💎 108</button>
            <button class="text-[#f2b14d]">🤔 74</button>
            <button class="text-[#db7c82]">💔 12</button>
          </div>
        </section>

        <section
          class="mt-5 flex items-center rounded-[10px] border border-white/[0.06] bg-[#1d1f26] p-4"
        >
          <img
            src="/img/avatar.jpg"
            alt=""
            class="h-[46px] w-[46px] rounded-full object-cover"
          />

          <div class="ml-4">
            <div class="flex items-center gap-2">
              <span class="text-[12px] font-[700] text-[#e8e5eb]">
                Алексей Соколов
              </span>

              <span class="text-[8px] text-[#8d8996]">
                Главный редактор раздела RPG
              </span>
            </div>

            <p
              class="mt-1 max-w-[700px] text-[9px] leading-[14px] text-[#9e9ba5]"
            >
              В игровой журналистике с 2012 года. Прошёл все части Dragon Age,
              Baldur's Gate и Gothic. Ценит сильные истории и хорошие RPG.
            </p>

            <div class="mt-2 flex gap-4 text-[8px] text-[#4fd2e8]">
              <a href="#">Все статьи автора</a>
              <a href="#">Канал в TG</a>
            </div>
          </div>
        </section>

        <section class="mt-8">
          <div class="flex items-center justify-between">
            <h2
              class="font-display text-[24px] font-[800] text-[#ece9f0]"
            >
              Обсуждение
              <span
                class="ml-1 rounded bg-[#9f72ea] px-2 py-[2px] align-middle font-sans text-[9px]"
              >
                264
              </span>
            </h2>

            <button class="text-[9px] font-[600] text-[#bba0ec]">
              Сначала новые
            </button>
          </div>

          <div
            class="mt-4 rounded-[10px] border border-white/[0.05] bg-[#1d1f26] p-4"
          >
            <div class="flex gap-3">
              <img
                src="/img/avatar.jpg"
                class="h-[32px] w-[32px] rounded-full object-cover"
                alt=""
              />

              <textarea
                placeholder="Поделитесь вашим мнением об игре или статье..."
                class="h-[58px] flex-1 resize-none bg-transparent text-[11px] text-white outline-none placeholder:text-[#6f6d77]"
              ></textarea>
            </div>

            <div
              class="mt-3 flex items-center justify-between border-t border-white/[0.05] pt-3"
            >
              <div class="flex gap-3 text-[10px] text-[#777580]">
                <button>B</button>
                <button>I</button>
                <button>⌘</button>
                <button>▧</button>
              </div>

              <button
                class="rounded-[5px] bg-[#a574ef] px-5 py-[6px] text-[9px] font-[700] text-[#291746]"
              >
                Отправить
              </button>
            </div>
          </div>

          <div
            class="mt-3 rounded-[10px] border border-white/[0.05] bg-[#1d1f26] p-4"
          >
            <div class="flex items-start gap-3">
              <img
                src="/img/avatar.jpg"
                class="h-[30px] w-[30px] rounded-full object-cover"
                alt=""
              />

              <div class="min-w-0 flex-1">
                <div class="flex items-center gap-2">
                  <span class="text-[10px] font-[700] text-[#e6e3e9]">
                    Алексей Соколов
                  </span>

                  <span
                    class="rounded bg-[#9a69e8] px-[4px] py-[1px] text-[7px] font-[700]"
                  >
                    АВТОР
                  </span>

                  <span class="text-[8px] text-[#77747f]">
                    4 часа назад
                  </span>

                  <span class="ml-auto text-[8px] text-[#edaa4d]">
                    ★ Закреплено
                  </span>
                </div>

                <p
                  class="mt-2 text-[10px] leading-[15px] text-[#b7b4bd]"
                >
                Коллеги, небольшое уточнение по поводу выборов из прошлых частей: решения переносятся через встроенный
                конструктор историй в меню персонажа (сохранения Dragon Age Keep не используются напрямую). Внимательно
                настраивайте инквизитора при создании героя!
                </p>

                <div class="mt-2 flex gap-4 text-[8px] text-[#4fd1e6]">
                  <button>Ответить</button>
                  <button class="text-[#8d8a94]">♡ 89</button>
                </div>
              </div>
            </div>
          </div>

          <div
            class="mt-3 rounded-[10px] border border-white/[0.05] bg-[#1d1f26] p-4"
          >
            <div class="flex items-start gap-3">
              <div
                class="flex h-[30px] w-[30px] items-center justify-center rounded-full bg-[#173845] text-[9px] font-[700] text-[#4fd3e8]"
              >
                MK
              </div>

              <div class="min-w-0 flex-1">
                <div class="flex items-center gap-2">
                  <span class="text-[10px] font-[700] text-[#e6e3e9]">
                    Maxim_K
                  </span>

                  <span class="text-[8px] text-[#77747f]">
                    2 часа назад
                  </span>
                </div>

                <p
                  class="mt-2 text-[10px] leading-[15px] text-[#b7b4bd]"
                >
                  Спасибо за замечательный разбор! Очень боялся за оптимизацию
                  после последних релизов на Frostbite, но новость про 60+ FPS
                  радует.
                </p>

                <div class="mt-2 flex gap-4 text-[8px] text-[#4fd1e6]">
                  <button>Ответить</button>
                  <button class="text-[#8d8a94]">♡ 42</button>
                </div>
              </div>
            </div>
          </div>

          <div
            class="mt-3 rounded-[10px] border border-white/[0.05] bg-[#1d1f26] p-4"
          >
            <div class="flex items-start gap-3">
              <div
                class="flex h-[30px] w-[30px] items-center justify-center rounded-full bg-[#30263b] text-[9px] font-[700] text-[#c6a6ef]"
              >
                VR
              </div>

              <div class="min-w-0 flex-1">
                <div class="flex items-center gap-2">
                  <span class="text-[10px] font-[700] text-[#e6e3e9]">
                    Valera_Rogue
                  </span>

                  <span class="text-[8px] text-[#77747f]">
                    1 час назад
                  </span>
                </div>

                <p
                  class="mt-2 text-[10px] leading-[15px] text-[#b7b4bd]"
                >
                  Подтверждаю, на RX 6700 XT с Quad HD всё плавно без просадок.
                  Оптимизация — мой главный сюрприз.
                </p>

                <div class="mt-2 flex gap-4 text-[8px] text-[#4fd1e6]">
                  <button>Ответить</button>
                  <button class="text-[#8d8a94]">♡ 24</button>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="mt-9 pb-10">
          <div class="flex items-center justify-between">
            <h2
              class="font-display text-[21px] font-[800] text-[#ece9f0]"
            >
              Читайте также в разделе «Обзоры»
            </h2>

            <a
              href="#"
              class="text-[9px] font-[600] text-[#4fd3e8]"
            >
              Все обзоры →
            </a>
          </div>

          <div class="mt-4 grid grid-cols-3 gap-3">

            <article
              class="overflow-hidden rounded-[9px] border border-white/[0.06] bg-[#1d1f26]"
            >
              <div class="relative">
                <img
                  src="/img/more.jpg"
                  alt=""
                  class="aspect-[16/9] w-full object-cover"
                />

                <span
                  class="absolute right-2 top-2 rounded bg-[#efad4c] px-[5px] py-[2px] text-[8px] font-[700] text-black"
                >
                  9.2
                </span>
              </div>

              <div class="p-3">
                <div
                  class="text-[8px] font-[700] uppercase text-[#55d3e8]"
                >
                  DLC / дополнение
                </div>

                <h3
                  class="mt-2 text-[11px] font-[600] leading-[15px] text-[#eeeaf1]"
                >
                  Cyberpunk 2077: Phantom Liberty — шпионский триллер всерьёз
                </h3>

                <div
                  class="mt-3 flex justify-between text-[8px] text-[#777580]"
                >
                  <span>24 фев 2025</span>
                  <span>♡ 183</span>
                </div>
              </div>
            </article>

            <article
              class="overflow-hidden rounded-[9px] border border-white/[0.06] bg-[#1d1f26]"
            >
              <div class="relative">
                <img
                  src="/img/more_2.jpg"
                  alt=""
                  class="aspect-[16/9] w-full object-cover"
                />

                <span
                  class="absolute right-2 top-2 rounded bg-[#56d4e9] px-[5px] py-[2px] text-[8px] font-[700] text-black"
                >
                  8.6
                </span>
              </div>

              <div class="p-3">
                <div
                  class="text-[8px] font-[700] uppercase text-[#c7a2ef]"
                >
                  Большой обзор
                </div>

                <h3
                  class="mt-2 text-[11px] font-[600] leading-[15px] text-[#eeeaf1]"
                >
                  Avowed — обсидиановский колосс и магия Эоры в формате экшена
                </h3>

                <div
                  class="mt-3 flex justify-between text-[8px] text-[#777580]"
                >
                  <span>08 мар 2025</span>
                  <span>♡ 94</span>
                </div>
              </div>
            </article>

            <article
              class="overflow-hidden rounded-[9px] border border-white/[0.06] bg-[#1d1f26]"
            >
              <div class="relative">
                <img
                  src="/img/more_3.jpg"
                  alt=""
                  class="aspect-[16/9] w-full object-cover"
                />

                <span
                  class="absolute right-2 top-2 rounded bg-[#b6b4bc] px-[5px] py-[2px] text-[8px] font-[700] text-black"
                >
                  7.6
                </span>
              </div>

              <div class="p-3">
                <div
                  class="text-[8px] font-[700] uppercase text-[#edae4e]"
                >
                  Рецензия
                </div>

                <h3
                  class="mt-2 text-[11px] font-[600] leading-[15px] text-[#eeeaf1]"
                >
                  Star Wars Outlaws — приключения контрабандистки
                </h3>

                <div
                  class="mt-3 flex justify-between text-[8px] text-[#777580]"
                >
                  <span>12 янв 2025</span>
                  <span>♡ 230</span>
                </div>
              </div>
            </article>

          </div>
        </section>

      </article>
    </div>
  </main>

</body>
</html>