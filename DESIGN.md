---
name: "LASH by TASH"
description: "Визуальная система сайта студии LASH by TASH"
colors:
  rose: "#eeced9"
  petal: "#f0d2dd"
  pale-rose: "#faeaf0"
  berry: "#492837"
  accent: "#813e5d"
  cream: "#fff2e7"
  gold: "#e3c58e"
  berry-hover: "#642e47"
  hairline: "#49283745"
typography:
  display:
    fontFamily: "Cormorant Garamond, Georgia, serif"
    fontSize: "clamp(62px, 7.1vw, 106px)"
    fontWeight: 500
    lineHeight: 0.86
    letterSpacing: "-.038em"
  headline:
    fontFamily: "Cormorant Garamond, Georgia, serif"
    fontSize: "clamp(58px, 7vw, 100px)"
    fontWeight: 500
    lineHeight: 0.86
    letterSpacing: "-.038em"
  title:
    fontFamily: "Cormorant Garamond, Georgia, serif"
    fontSize: "clamp(31px, 3.4vw, 49px)"
    fontWeight: 600
    lineHeight: 1.1
  body:
    fontFamily: "Manrope, Arial, sans-serif"
    fontSize: "16px"
    fontWeight: 500
    lineHeight: 1.55
  action:
    fontFamily: "Manrope, Arial, sans-serif"
    fontSize: "15px"
    fontWeight: 800
    lineHeight: 1.35
rounded:
  square: "0px"
spacing:
  gutter: "clamp(24px, 5.28vw, 100px)"
  hero-gap: "clamp(28px, 3.89vw, 56px)"
  section-gap: "clamp(28px, 6vw, 100px)"
  section-padding: "clamp(60px, 9vw, 134px)"
components:
  button-primary:
    backgroundColor: "{colors.berry}"
    textColor: "{colors.cream}"
    typography: "{typography.action}"
    rounded: "{rounded.square}"
    padding: "12px 24px"
  button-primary-hover:
    backgroundColor: "{colors.berry-hover}"
  button-inverse:
    backgroundColor: "{colors.cream}"
    textColor: "{colors.berry}"
    typography: "{typography.action}"
    rounded: "{rounded.square}"
    padding: "12px 24px"
  button-inverse-hover:
    backgroundColor: "{colors.gold}"
---

# Design System — LASH by TASH

## Overview

**Creative North Star: "Розовая кулиса"**

Мягкие розовые поверхности обрамляют крупные фотографии с точным кадрированием. Выразительная антиква держит масштаб, а спокойный гротеск сохраняет ясность текста и действий.

**Key Characteristics**

- Розовые поля с ягодным текстом и тёплым золотом в деталях.
- Прямоугольные кадры и тонкие разделители.
- Крупная антиква рядом с компактными и заметными действиями.

## Colors

Пыльно-розовый служит основным фоном. Светлый розовый и розовый лепесток отделяют соседние блоки. Ягодный работает как основной текст и как насыщенный фон под светлый текст. Более тёплый акцент выделяет курсив на розовом. Кремовый смягчает белый, золото обводит портрет и выделяет курсив на ягодном фоне.

## Typography

Cormorant Garamond задаёт крупные заголовки и названия услуг. Курсив в той же гарнитуре выделяет короткую смысловую часть заголовка. Manrope используется для описаний, навигации и кнопок. Пояснения к крупным заголовкам ограничены 37 знаками по ширине, рассчитанными в единицах ch.

## Layout

Одинаковый внешний отступ выравнивает шапку и контент. На широком экране текст и изображение образуют две колонки. На экранах до 790 px колонки складываются, и текст с основным действием остаётся выше фотографии. До 460 px основная кнопка занимает всю доступную ширину. На самых узких экранах до 370 px внешний отступ составляет 18 px.

## Elevation & Depth

Глубину задают смена оттенков фона, кадрирование фотографии и тонкие линии. Поверхности плоские.

## Shapes

Прямые углы связывают кнопки с фотографиями. У портрета тонкая рамка с отступом 12 px от края на широком экране и 8 px на узком. Линии между строками услуг имеют толщину 1 px.

## Components

### Кнопка записи

Ягодная на розовом и кремовая на ягодном. Текст и диагональная стрелка образуют одну цельную область нажатия высотой от 57 px. При наведении цвет меняется, кнопка поднимается на 1 px. При нажатии она опускается на 1 px. Видимый контур фокуса имеет толщину 2 px.

### Навигация

На широком экране ссылки открыто размещены в шапке. На узком их раскрывает «Меню». В раскрытом меню строки отделены тонкими линиями, а каждая ссылка занимает не менее 48 px в высоту.

### Строка услуги

Название услуги набрано антиквой. Плюс в конце строки при открытии превращается в минус, под заголовком появляется пояснение. Состояние раскрытия доступно с клавиатуры.

### Портрет

Крупный план открывается один раз через горизонтальный разрез, напоминающий движение века. Полный кадр остаётся виден при выключенной анимации и при включённом уменьшении движения.
