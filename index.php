<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Colección ✦</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400&family=DM+Sans:wght@300;400;500&display=swap"
        rel="stylesheet" />
    <style>
    /* ─── TOKENS ─── */
    :root {
        --cream: #f4efe6;
        --cream2: #ede5d3;
        --sand: #d3c4ae;
        --mocha: #bfaa8e;
        --brown: #8a7253;
        --db: #5b3f32;
        --vd: #3c2d1d;
        --gold: #b7945a;
        --textl: #8a7a66;
        --textm: #594838;
        --white: #faf7f2;
        --ease: cubic-bezier(0.4, 0, 0.2, 1);
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    html,
    body {
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    @media (max-height: 700px) {
        html, body {
            overflow: auto;
        }
        .stack {
            height: auto;
            min-height: 100vh;
        }
        .screen {
            position: relative;
            inset: auto;
            height: auto;
            min-height: 100vh;
            opacity: 1;
            transform: none;
            pointer-events: none;
            display: none;
        }
        .screen.active {
            display: flex;
            pointer-events: all;
        }
        #s1 {
            flex-direction: column;
        }
        #s6 {
            height: auto;
            min-height: 100vh;
        }
    }

    body {
        font-family: "DM Sans", sans-serif;
        background: var(--cream);
        color: var(--vd);
        -webkit-font-smoothing: antialiased;
    }

    button {
        cursor: pointer;
        border: none;
        background: none;
        font-family: inherit;
    }

    input {
        font-family: inherit;
        outline: none;
    }

    img {
        display: block;
        max-width: 100%;
    }

    /* ─── PROGRESS ─── */
    .prog {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        z-index: 999;
        background: rgba(61, 44, 29, 0.08);
    }

    .prog-fill {
        height: 100%;
        background: linear-gradient(90deg, var(--db), var(--gold));
        transition: width 0.5s var(--ease);
        width: 0%;
    }

    .back-btn {
        position: fixed;
        top: 10px;
        left: 16px;
        font-size: 1rem;
        color: var(--textl);
        z-index: 999;
        display: none;
        transition: color 0.2s;
    }

    .back-btn.show {
        display: block;
    }

    .back-btn:hover {
        color: var(--brown);
    }

    /* ─── SCREEN SYSTEM ─── */
    .stack {
        width: 100%;
        height: 100vh;
        position: relative;
        overflow: hidden;
    }

    .screen {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        overflow-y: auto;
        overflow-x: hidden;
        -webkit-overflow-scrolling: touch;
        opacity: 0;
        pointer-events: none;
        transform: translateX(60px);
        transition:
            opacity 0.42s var(--ease),
            transform 0.42s var(--ease);
        background: var(--cream);
    }

    .screen.active {
        opacity: 1;
        pointer-events: all;
        transform: translateX(0);
    }

    .screen.exit {
        opacity: 0;
        transform: translateX(-60px);
        pointer-events: none;
    }

    .screen::-webkit-scrollbar {
        width: 3px;
    }

    .screen::-webkit-scrollbar-thumb {
        background: var(--mocha);
        border-radius: 2px;
    }

    /* ─── BTN ─── */
    .btn-cta {
        display: block;
        width: 100%;
        padding: 15px 28px;
        border-radius: 50px;
        margin-bottom: 24px;
        margin-top: 28px;
        background: var(--vd);
        color: var(--white);
        font-size: 0.93rem;
        font-weight: 500;
        letter-spacing: 0.04em;
        text-align: center;
        transition: all 0.3s var(--ease);
    }

    .btn-cta:hover {
        background: var(--brown);
        transform: translateY(-2px);
        box-shadow: 0 12px 28px rgba(61, 44, 29, 0.2);
    }

    /* ════════════════════
         S1 — WELCOME
      ════════════════════ */
    #s1 {
        display: flex !important;
        flex-direction: column;
    }

    .ws-v {
        position: relative;
        width: 100%;
        height: 48vw;
        min-height: 260px;
        max-height: 400px;
        overflow: hidden;
        flex-shrink: 0;
    }

    .ws-v img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center top;
    }

    .ws-v .grad {
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom,
                rgba(61, 44, 29, 0.08),
                var(--cream) 100%);
    }

    .ws-v .badge {
        position: absolute;
        top: 16px;
        right: 16px;
        background: rgba(255, 248, 236, 0.18);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 248, 236, 0.3);
        padding: 6px 14px;
        border-radius: 30px;
        font-size: 0.66rem;
        letter-spacing: 0.15em;
        text-transform: uppercase;
        color: rgba(255, 248, 236, 0.95);
    }

    .ws-v .star {
        position: absolute;
        top: 20px;
        left: 20px;
        font-size: 20px;
        color: rgba(255, 248, 236, 0.55);
        animation: spin 12s linear infinite;
    }

    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }

    .ws-f {
        flex: 1;
        padding: 16px 22px 44px;
        display: flex;
        flex-direction: column;
    }

    .mini {
        font-size: 0.67rem;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        color: var(--gold);
        margin-bottom: 12px;
    }

    .htitle {
        font-family: "Cormorant Garamond", serif;
        font-size: 2.1rem;
        font-weight: 300;
        line-height: 1.15;
        color: var(--vd);
        margin-bottom: 8px;
    }

    .htitle em {
        font-style: italic;
        color: var(--brown);
    }

    .hlead {
        font-size: 0.9rem;
        color: var(--textm);
        margin-bottom: 22px;
    }

    .fl {
        display: block;
        font-size: 0.67rem;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: var(--textl);
        margin-bottom: 8px;
    }

    .inpw {
        position: relative;
        margin-bottom: 6px;
    }

    .inpw input {
        width: 100%;
        border: none;
        border-bottom: 2px solid var(--mocha);
        background: transparent;
        padding: 10px 0;
        font-size: 1.15rem;
        color: var(--vd);
        transition: border-color 0.3s;
    }

    .inpw input:focus {
        border-bottom-color: var(--brown);
    }

    .inpw input::placeholder {
        color: var(--sand);
    }

    .inphint {
        font-size: 0.67rem;
        color: var(--mocha);
        margin-bottom: 16px;
        font-style: italic;
    }

    .contact-row {
        display: flex;
        align-items: flex-end;
        gap: 8px;
        border-bottom: 2px solid var(--mocha);
        margin-bottom: 16px;
        transition: border-color 0.3s;
    }

    .contact-row:focus-within {
        border-color: var(--brown);
    }

    .contact-select-wrap {
        position: relative;
        flex-shrink: 0;
        display: flex;
        align-items: center;
    }

    .contact-select-wrap select {
        border: none;
        background: transparent;
        font-family: inherit;
        font-size: 0.82rem;
        color: var(--brown);
        padding: 10px 20px 10px 0;
        cursor: pointer;
        outline: none;
        appearance: none;
        -webkit-appearance: none;
    }

    .contact-select-wrap .sel-arrow {
        position: absolute;
        right: 4px;
        pointer-events: none;
        font-size: 0.6rem;
        color: var(--gold);
        line-height: 1;
    }

    .contact-row input {
        flex: 1;
        border: none;
        background: transparent;
        padding: 10px 0;
        font-size: 1.15rem;
        color: var(--vd);
        outline: none;
    }

    .contact-row input::placeholder {
        color: var(--sand);
    }

    .sugrow {
        display: none;
        margin-bottom: 16px;
    }

    .sq {
        font-family: "Cormorant Garamond", serif;
        font-style: italic;
        font-size: 1rem;
        color: var(--textm);
        margin-bottom: 10px;
    }

    .chips {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .chip {
        padding: 8px 18px;
        border-radius: 40px;
        border: 1.5px solid var(--mocha);
        color: var(--brown);
        font-size: 0.85rem;
        font-weight: 500;
        transition: all 0.25s;
    }

    .chip:hover,
    .chip.on {
        background: var(--brown);
        color: var(--white);
        border-color: var(--brown);
        transform: translateY(-2px);
    }

    /* ════════════════════
         Q SCREENS
      ════════════════════ */
    .sq-s {
        display: flex !important;
        justify-content: center;
    }

    .qi {
        width: 100%;
        max-width: 720px;
        padding: 58px 22px 44px;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .qtag {
        font-size: 0.67rem;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: var(--gold);
        margin-bottom: 10px;
        min-height: 16px;
    }

    .qtitle {
        font-family: "Cormorant Garamond", serif;
        font-size: 1.9rem;
        font-weight: 400;
        line-height: 1.2;
        color: var(--vd);
        margin-bottom: 8px;
    }

    .qsub {
        font-size: 0.82rem;
        color: var(--textl);
        margin-bottom: 22px;
    }

    /* Age */
    .agegrid {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
        flex: 1;
        align-content: start;
        margin-bottom: 24px;
    }

    .ac {
        padding: 20px 28px;
        border-radius: 18px;
        background: var(--cream2);
        border: 2px solid transparent;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        gap: 16px;
        width: 40%;
        transition: all 0.28s var(--ease);
    }

    .an {
        font-family: "Cormorant Garamond", serif;
        font-size: 1.4rem;
        color: var(--vd);
    }

    .as {
        font-size: 0.7rem;
        color: var(--textl);
        letter-spacing: 0.04em;
    }

    .ac:hover {
        border-color: var(--mocha);
        background: var(--white);
        transform: translateY(-3px);
        box-shadow: 0 8px 22px rgba(138, 114, 83, 0.15);
    }

    .ac.on {
        background: var(--vd);
        border-color: var(--vd);
        transform: translateY(-3px);
    }

    .ac.on .an,
    .ac.on .as {
        color: var(--cream);
    }

    /* Size */
    .sizeblocks {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-bottom: 16px;
        flex: 1;
        align-content: start;
    }

    .sblock {
        display: flex;
        align-items: center;
        background: var(--cream2);
        border-radius: 16px;
        border: none;
        overflow: hidden;
        transition: border-color 0.3s;
    }

    .sblock.sel {
        border-color: none;
    }

    .sbimg {
        position: relative;
        width: 90px;
        height: 90px;
        flex-shrink: 0;
        overflow: hidden;
    }

    .sbimg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .sblbl {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(61, 44, 29, 0.72);
        color: var(--white);
        font-size: 0.55rem;
        letter-spacing: 0.06em;
        text-align: center;
        padding: 5px 3px;
    }

    .sbbtns {
        display: flex;
        gap: 6px;
        flex-wrap: wrap;
        padding: 12px 14px;
    }

    .sz {
        width: 32px;
        height: 32px;
        border-radius: 10%;
        border: 1.5px solid var(--mocha);
        font-size: 0.7rem;
        font-weight: 600;
        color: var(--brown);
        transition: all 0.22s;
        flex-shrink: 0;
    }

    .sz:hover {
        background: var(--mocha);
        color: var(--white);
        border-color: var(--mocha);
        transform: scale(1.08);
    }

    .sz.on {
        background: var(--brown);
        color: var(--white);
        border-color: var(--brown);
        transform: scale(1.12);
        box-shadow: 0 4px 12px rgba(138, 114, 83, 0.3);
    }

    .depbtn {
        padding: 10px 18px;
        border-radius: 50px;
        border: 1.5px solid var(--mocha);
        color: var(--textl);
        font-size: 0.8rem;
        transition: all 0.25s;
        margin-bottom: 4px;
    }

    .depbtn:hover {
        border-color: var(--brown);
        color: var(--brown);
        background: var(--cream2);
    }

    /* Style */
    .stgrid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
        margin-bottom: 16px;
        flex: 1;
        align-content: start;
    }

    .stcard {
        border-radius: 14px;
        overflow: hidden;
        border: 3px solid transparent;
        cursor: pointer;
        transition: all 0.28s var(--ease);
        position: relative;
    }

    .stimg {
        position: relative;
        aspect-ratio: 0.8;
        overflow: hidden;
    }

    .stimg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s var(--ease);
    }

    .stcard:hover .stimg img {
        transform: scale(1.07);
    }

    .stov {
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom,
                transparent 40%,
                rgba(61, 44, 29, 0.78) 100%);
    }

    .stnm {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 10px 6px;
        font-size: 0.67rem;
        font-weight: 500;
        color: var(--white);
        text-align: center;
        line-height: 1.2;
    }

    .stcard.on {
        border-color: var(--gold);
        box-shadow: 0 0 0 3px rgba(183, 148, 90, 0.25);
    }

    .stcard.on::after {
        content: "✦";
        position: absolute;
        top: 7px;
        right: 7px;
        width: 22px;
        height: 22px;
        border-radius: 50%;
        background: var(--gold);
        color: var(--vd);
        font-size: 0.65rem;
        line-height: 22px;
        text-align: center;
    }

    /* Price */
    .pricelist {
        display: flex;
        flex-direction: column;
        gap: 12px;
        flex: 1;
        align-content: start;
        margin-bottom: 16px;
    }

    .pcard {
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 20px;
        border-radius: 16px;
        background: var(--cream2);
        border: 2px solid transparent;
        text-align: left;
        transition: all 0.28s var(--ease);
    }

    .picon {
        font-size: 1.8rem;
        flex-shrink: 0;
    }

    .pcard>div {
        display: flex;
        flex-direction: column;
        gap: 3px;
    }

    .pcard strong {
        font-size: 0.92rem;
        color: var(--vd);
        display: block;
    }

    .pcard span {
        font-size: 0.72rem;
        color: var(--textl);
        display: block;
    }

    .pcard:hover {
        border-color: var(--mocha);
        background: var(--white);
        transform: translateX(5px);
    }

    .pcard.on {
        background: var(--vd);
        border-color: var(--vd);
    }

    .pcard.on strong,
    .pcard.on span {
        color: var(--cream);
    }

    /* Pack */
    .packlist {
        display: flex;
        flex-direction: column;
        gap: 14px;
        flex: 1;
        align-content: start;
        margin-bottom: 16px;
    }

    .pkcard {
        display: flex;
        align-items: center;
        gap: 18px;
        padding: 0;
        overflow: hidden;
        border-radius: 18px;
        background: var(--cream2);
        border: 2px solid transparent;
        text-align: left;
        transition: all 0.28s var(--ease);
    }

    .pkcard img {
        width: 100%;
        height: 120px;
        object-fit: cover;
        border-radius: 14px;
        display: block;
    }

    .pkicon {
        font-size: 2.2rem;
        flex-shrink: 0;
    }

    .pkcard>div {
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .pkcard strong {
        font-size: 0.92rem;
        color: var(--vd);
        font-weight: 500;
        display: block;
    }

    .pkcard p {
        font-size: 0.75rem;
        color: var(--textl);
        margin: 0;
    }

    .pkcard:hover {
        border-color: var(--mocha);
        background: var(--white);
        transform: translateY(-2px);
    }

    .pkcard.on {
        background: var(--vd);
        border-color: var(--vd);
    }

    .pkcard.on strong,
    .pkcard.on p {
        color: var(--cream);
    }

    /* ════════════════════════════════════════════════
         S6 — PROBADOR VIRTUAL
         Sistema proporcional: las prendas siempre encajan
         sin importar el tamaño de pantalla.
      ════════════════════════════════════════════════ */
    #s6 {
        display: flex !important;
        flex-direction: column;
        background: var(--cream);
        overflow: hidden;
        height: 100vh;
    }

    .try-header {
        padding: 50px 20px 10px;
        text-align: center;
        flex-shrink: 0;
        z-index: 10;
    }

    .try-q {
        font-family: "Cormorant Garamond", serif;
        font-size: 1.3rem;
        font-weight: 400;
        line-height: 1.3;
        color: var(--vd);
        margin-bottom: 4px;
    }

    .try-sub {
        font-size: 0.76rem;
        color: var(--textl);
    }

    .try-stage {
        flex: 1;
        min-height: 0;
        display: flex;
        align-items: stretch;
        overflow: hidden;
        position: relative;
    }

    .arrow-col {
        width: 52px;
        flex-shrink: 0;
        display: flex;
        flex-direction: column;
        z-index: 20;
    }

    .arr-btn {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        font-weight: 200;
        color: rgba(61, 44, 29, 0.55);
        transition: all 0.2s var(--ease);
        line-height: 1;
    }

    .arr-btn:hover {
        color: var(--brown);
        transform: scale(1.2);
    }

    .arr-btn:active {
        transform: scale(0.9);
    }

    .arrow-divider {
        height: 1px;
        background: rgba(61, 44, 29, 0.12);
        flex-shrink: 0;
    }

    /* ─── ZONA CENTRAL: contenedor proporcional ─── */
    .mannequin-area {
        flex: 1;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        padding: 0;
    }

    /*
       * mannequin-wrap mantiene el aspect-ratio de la imagen del maniquí.
       * Aumenta el % de height para agrandar el maniquí y las prendas juntos.
       * 115% = 15% más grande que antes. Ajusta a gusto.
       */
    .mannequin-wrap {
        position: relative;
        height: 190%;
        aspect-ratio: 0.45 / 1;
        max-height: none;
        max-width: 100%;
        flex-shrink: 0;
    }

    /* El maniquí ocupa todo el contenedor proporcional */
    .mannequin-base {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: contain;
        display: block;
        z-index: 1;
    }

    /* Capa de prendas encima del maniquí */
    .garment-layer {
        position: absolute;
        inset: 0;
        z-index: 2;
        pointer-events: none;
    }

    /*
       * Las prendas usan porcentajes del contenedor .mannequin-wrap.
       * Como el contenedor siempre mantiene el mismo aspect-ratio,
       * los valores en % son consistentes en CUALQUIER tamaño de pantalla.
       * Los valores top/left/width/height se sobreescriben por JS desde item.fit
       */
    .garment-img {
        position: absolute;
        object-fit: contain;
        transition:
            opacity 0.3s ease,
            transform 0.3s ease;
        /* Valores por defecto — JS los sobreescribe con item.fit */
        top: 14%;
        left: 15%;
        width: 70%;
        height: 38%;
        margin: 0;
    }

    /* Dots indicadores */
    .zone-dots-float {
        position: absolute;
        display: flex;
        gap: 4px;
        z-index: 30;
        pointer-events: none;
    }

    #dotsTopFloat {
        right: -2px;
        top: 20%;
        flex-direction: column;
    }

    #dotsBotFloat {
        right: -2px;
        top: 58%;
        flex-direction: column;
    }

    .zdot {
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        border: 1px solid rgba(61, 44, 29, 0.25);
        transition: all 0.2s;
        flex-shrink: 0;
    }

    .zdot.on {
        background: var(--brown);
        transform: scale(1.3);
    }

    .try-footer {
        flex-shrink: 0;
        padding: 10px 22px 24px;
        min-height: 90px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 6px;
        background: var(--cream);
        border-top: 1px solid rgba(61, 44, 29, 0.08);
    }

    .try-look {
        font-size: 0.76rem;
        color: var(--textm);
        font-family: "Cormorant Garamond", serif;
        font-style: italic;
        text-align: center;
    }

    .try-look b {
        font-style: normal;
        color: var(--brown);
        font-weight: 500;
    }

    .try-footer .btn-cta {
        max-width: 320px;
        margin: 0;
    }

    /* ════════════════════
         S7 — RESULTADO
      ════════════════════ */
    #s7 {
        display: flex !important;
        background: #ffffff;
    }

    .rlayout {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        width: 100%;
    }

    .rvcol {
        padding: 56px 20px 20px;
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .ricol {
        flex: 1;
        padding: 48px 24px 48px;
        display: flex;
        flex-direction: column;
        gap: 14px;
        align-items: center;
    }

    .rbadge {
        display: inline-block;
        font-size: 0.66rem;
        letter-spacing: 0.28em;
        text-transform: uppercase;
        color: var(--gold);
        background: rgba(183, 148, 90, 0.1);
        border: 1px solid rgba(183, 148, 90, 0.25);
        padding: 8px 18px;
        border-radius: 40px;
    }

    .rhr {
        border: none;
        border-top: 1px solid rgba(255, 255, 255, 0.08);
        width: 100%;
    }

    .rlaunch {
        font-family: "Cormorant Garamond", serif;
        font-style: italic;
        font-size: 1.65rem;
        color: var(--gold);
    }

    .bsub {
        width: 100%;
        max-width: 320px;
        padding: 16px;
        border-radius: 50px;
        background: var(--gold);
        color: var(--vd);
        font-size: 0.94rem;
        font-weight: 600;
        letter-spacing: 0.04em;
        transition: all 0.3s var(--ease);
    }

    .bsub:hover {
        background: var(--cream);
        transform: translateY(-3px);
        box-shadow: 0 14px 34px rgba(0, 0, 0, 0.35);
    }

    /* ── Video en S7 ── */
    .r-video-wrap {
        border-radius: 16px;
        overflow: hidden;
        width: 70%;
        aspect-ratio: 9/16;
        background: var(--cream2);
        flex-shrink: 0;
        align-self: center;
    }

    .r-video-wrap video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .r-video-title {
        font-family: "Cormorant Garamond", serif;
        font-size: 1.7rem;
        font-weight: 300;
        color: #3c2d1d;
        text-align: center;
        opacity: 0.85;
    }

    /* ─── RESPONSIVE ─── */
    @media (min-width: 768px) {
        #s1 {
            flex-direction: row;
        }

        .ws-v {
            width: 44%;
            height: 100vh;
            max-height: none;
            flex-shrink: 0;
        }

        .ws-f {
            width: 56%;
            padding: 80px 56px 56px;
            justify-content: center;
        }

        .htitle {
            font-size: 2.6rem;
        }

        .qi {
            padding: 80px 48px 56px;
            max-width: 860px;
        }

        .qtitle {
            font-size: 1rem;
        }

        .sizeblocks {
            flex-direction: row;
        }

        .sblock {
            flex-direction: column;
            flex: 1;
            min-width: 150px;
        }

        .sbimg {
            width: 100%;
            height: 160px;
        }

        .sbbtns {
            padding: 12px;
            justify-content: center;
        }

        .pricelist {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .pcard {
            flex-direction: column;
            align-items: flex-start;
            padding: 22px 20px;
            gap: 10px;
        }

        .try-q {
            font-size: 1.55rem;
        }

        .arrow-col {
            width: 70px;
        }

        .arr-btn {
            font-size: 2.4rem;
        }

        #s7 {
            flex-direction: row;
            height: 100vh;
            overflow: hidden;
        }

        .rvcol {
            width: 44%;
            height: 100vh;
            overflow-y: auto;
            flex-shrink: 0;
            padding: 72px 28px 28px;
        }

        .ricol {
            flex: 1;
            height: 100vh;
            overflow-y: auto;
            padding: 72px 48px 48px;
        }

        .ac {
            max-width: 440px;
        }
    }

    @media (min-width: 1024px) {
        .ws-v {
            width: 48%;
        }

        .ws-f {
            padding: 80px 80px 60px;
        }

        .htitle {
            font-size: 3rem;
        }

        .qi {
            padding: 80px 80px 60px;
            max-width: 1000px;
        }

        .qtitle {
            font-size: 2rem;
        }

        .arrow-col {
            width: 88px;
        }

        .arr-btn {
            font-size: 2.8rem;
        }

        .try-q {
            font-size: 1.75rem;
        }

        .rvcol {
            width: 42%;
        }
    }
    </style>
</head>

<body>
    <div class="prog">
        <div class="prog-fill" id="progFill"></div>
    </div>
    <button class="back-btn" id="backBtn" onclick="goBack()">← volver</button>

    <div class="stack">
        <!-- S1 -->
        <div class="screen active" id="s1">
            <div class="ws-v">
                <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?w=900&q=85&fit=crop&crop=center"
                    alt="moda" />
                <div class="grad"></div>
                <span class="star">✦</span>
            </div>
            <div class="ws-f">
                <h1 class="htitle">
                    Estamos<br />creando <em>una<br />nueva marca</em><br />de ropa<br />femenina
                </h1>
                <p class="hlead">¿Nos ayudarías a diseñarla para ti?</p>
                <label class="fl">escribe tu nombre</label>
                <div class="inpw">
                    <input type="text" id="nameInput" placeholder="tu nombre…" autocomplete="off" />
                </div>
                <div class="sugrow" id="sugRow">
                    <p class="sq"><em>¿te gusta que te llamen…</em></p>
                    <div class="chips" id="chips"></div>
                </div>
                <p class="inphint">(para que podamos conversar :) amiga)</p>
                <label class="fl"></label>
                <div class="contact-row">
                    <div class="contact-select-wrap">
                        <select id="contactType">
                            <option value="celular">Celular</option>
                            <option value="email">Correo</option>
                        </select>
                        <span class="sel-arrow">▼</span>
                    </div>
                    <input type="email" id="emailInput" placeholder="correo@ejemplo.com" autocomplete="off" />
                </div>
                <button class="btn-cta" id="btnStart">Empezar · 1 min ✦</button>
            </div>
        </div>

        <!-- S2 EDAD -->
        <div class="screen sq-s" id="s2">
            <div class="qi">
                <p class="qtag" id="tag2"></p>
                <h2 class="qtitle">Cuéntanos, ¿en qué rango de edad estás?</h2>
                <div class="agegrid">
                    <button class="ac" data-v="18-24">
                        <span class="an">18 – 24</span>
                    </button>
                    <button class="ac" data-v="25-30">
                        <span class="an">25 – 30</span>
                    </button>
                    <button class="ac" data-v="31-35">
                        <span class="an">31 – 35</span>
                    </button>
                    <button class="ac" data-v="36-45">
                        <span class="an">36 – 45</span>
                    </button>
                    <button class="ac" data-v="+45">
                        <span class="an">+ 45</span>
                    </button>
                </div>
                <button class="btn-cta" id="btnNext2" style="display: none" onclick="go(3)">
                    Continuar →
                </button>
            </div>
        </div>

        <!-- S3 ESTILO -->
        <div class="screen sq-s" id="s3">
            <div class="qi">
                <p class="qtag" id="tag3"></p>
                <h2 class="qtitle">¿Qué estilo usas normalmente?</h2>
                <p class="qsub">Elige todos los que te identifican ✦</p>
                <div class="stgrid" id="stGrid"></div>
                <button class="btn-cta" id="btnNext3" style="display: none" onclick="go(4)">
                    Continuar →
                </button>
            </div>
        </div>

        <!-- S4 MEJORAS -->
        <div class="screen sq-s" id="s4">
            <div class="qi">
                <p class="qtag" id="tag4new"></p>
                <h2 class="qtitle">
                    Si pudieras mejorar algo en la ropa deportiva, ¿qué sería?
                </h2>
                <p class="qsub">Elige todas las que quieras ✦</p>
                <div class="pricelist" id="mejList">
                    <button class="pcard" data-v="elasticidad">
                        <div><strong>Más elasticidad</strong></div>
                    </button>
                    <button class="pcard" data-v="cintura">
                        <div><strong>Mejor ajuste en la cintura</strong></div>
                    </button>
                    <button class="pcard" data-v="busto">
                        <div><strong>Más soporte en el busto</strong></div>
                    </button>
                    <button class="pcard" data-v="telas">
                        <div><strong>Telas más suaves</strong></div>
                    </button>
                    <button class="pcard" data-v="tallas">
                        <div><strong>Más tallas disponibles</strong></div>
                    </button>
                </div>
                <button class="btn-cta" id="btnNext4new" style="display: none" onclick="go(5)">
                    Continuar →
                </button>
            </div>
        </div>

        <!-- S5 PRECIO -->
        <div class="screen sq-s" id="s5">
            <div class="qi">
                <p class="qtag" id="tag5"></p>
                <h2 class="qtitle">
                    ¿Qué prenda deportiva te cuesta más encontrar que te quede bien?
                </h2>
                <div class="pricelist">
                    <button class="pcard">
                        <div><strong>Tops deportivos</strong></div>
                    </button>
                    <button class="pcard">
                        <div><strong>Leggings</strong></div>
                    </button>
                    <button class="pcard">
                        <div><strong>Camisetas deportivas</strong></div>
                    </button>
                    <button class="pcard">
                        <div><strong>Shorts deportivos</strong></div>
                    </button>
                </div>
                <button class="btn-cta" id="btnNext5" style="display: none" onclick="go(6)">
                    Continuar →
                </button>
            </div>
        </div>

        <!-- S6 — PROBADOR VIRTUAL -->
        <div class="screen" id="s6">
            <div class="try-header">
                <h2 class="try-q">¿Con qué crees que se deba ir al pilates?</h2>
                <p class="try-sub">Elige el estilo que amarías</p>
            </div>

            <div class="try-stage">
                <!-- FLECHAS IZQUIERDA -->
                <div class="arrow-col" id="arrowLeft">
                    <button class="arr-btn" id="prevTop">‹</button>
                    <div class="arrow-divider"></div>
                </div>

                <!-- ZONA CENTRAL: contenedor proporcional al maniquí -->
                <div class="mannequin-area">
                    <!--
              mannequin-wrap tiene aspect-ratio fijo = mismo ratio que la imagen del maniquí.
              Así, todo lo que está dentro escala junto proporcionalmente.
              Ajusta el aspect-ratio en CSS (.mannequin-wrap) al ratio real de tu imagen.
            -->
                    <div class="mannequin-wrap" id="mannequinWrap">
                        <!-- Maniquí de fondo -->
                        <img class="mannequin-base" src="images/maniqui3.png" alt="maniquí" id="mannequinImg" />
                        <!-- Prendas encima -->
                        <div class="garment-layer">
                            <img class="garment-img" id="gTop" src="" alt="top" />
                        </div>
                        <!-- Dots indicadores -->
                        <div class="zone-dots-float" id="dotsTopFloat"></div>
                    </div>
                </div>

                <!-- FLECHAS DERECHA -->
                <div class="arrow-col" id="arrowRight">
                    <button class="arr-btn" id="nextTop">›</button>
                    <div class="arrow-divider"></div>
                </div>
            </div>

            <div class="try-footer">
                <p class="try-look" id="tryLook"></p>
                <button class="btn-cta" onclick="goToResult()">
                    Ver look completo →
                </button>
            </div>
        </div>

        <!-- S7 RESULTADO -->
        <div class="screen" id="s7">
            <div class="rlayout">
                <div class="ricol">
                    <p class="r-video-title">
                        Este conjunto lo encontrarás en <strong>Vora</strong>
                    </p>
                    <div class="r-video-wrap">
                        <video id="rVideo" autoplay loop muted playsinline></video>
                    </div>
                    <hr class="rhr" />
                    <p class="rlaunch"><em>Entérate del lanzamiento</em></p>
                    <a href="https://www.instagram.com/vora.fitness?igsh=amh1eXZ6bHVvN2Ey" target="_blank" class="bsub"
                        style="
                display: block;
                text-align: center;
                text-decoration: none;
                margin-top: 4px;
              ">
                        Suscríbete ya ✦
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
    const DATA = {
        top: [{
                name: "Prenda Café",
                color: "#7a5238",
                url: "images/torso/prenda_cafe.png",
                video: "videos/combo1.1.mp4",
                fit: {
                    top: "27%",
                    left: "23%",
                    width: "54%",
                    height: "38%",
                },
            },
            {
                name: "Prenda Blanca",
                color: "#7a5238",
                url: "images/torso/prenda_blanca.png",
                video: "videos/combo4.mp4",
                fit: {
                    top: "27%",
                    left: "23%",
                    width: "54%",
                    height: "38%",
                },
            },
            {
                name: "Prenda Gris",
                color: "#7a5238",
                url: "images/torso/prenda_gris.png",
                video: "videos/combo3.mp4",
                fit: {
                    top: "27%",
                    left: "23%",
                    width: "54%",
                    height: "38%",
                },
            },
            {
                name: "Prenda Rosada",
                color: "#7a5238",
                url: "images/torso/prenda_rosada.png",
                video: "videos/combo2.mp4",
                fit: {
                    top: "27%",
                    left: "23%",
                    width: "54%",
                    height: "38%",
                },
            },
        ],
    };

    const STYLES = [{
            k: "tops",
            l: "Tops deportivos",
            i: "images/uploads/prenda1.png"
        },
        {
            k: "leggings",
            l: "Leggings",
            i: "images/uploads/prenda3.png"
        },
        {
            k: "conjuntos",
            l: "Conjuntos",
            i: "images/uploads/prenda4.png"
        },
        {
            k: "chaquetas",
            l: "Chaquetas ligeras",
            i: "images/uploads/prenda5.png",
        },
        {
            k: "Top manga larga",
            l: "Top manga larga",
            i: "images/uploads/prenda6.png",
        },
        {
            k: "Oversize",
            l: "Oversize",
            i: "images/uploads/prenda7.png"
        },
    ];

    const NAMES = {
        alejandra: ["Ale", "Alexa", "Alejandra"],
        valentina: ["Val", "Valen", "Valentina"],
        valeria: ["Vale", "Valeria"],
        andrea: ["Andy", "Andre", "Andrea"],
        camila: ["Cami", "Camila"],
        daniela: ["Dany", "Dani", "Daniela"],
        isabella: ["Isa", "Bella", "Isabella"],
        mariana: ["Mary", "Mari", "Mariana"],
        gabriela: ["Gaby", "Gabi", "Gabriela"],
        carolina: ["Caro", "Carol", "Carolina"],
        natalia: ["Naty", "Nati", "Natalia"],
        sofia: ["Sofi", "Sofia"],
        paula: ["Pau", "Paula"],
        laura: ["Lau", "Laura"],
        juliana: ["Juli", "Juliana"],
        diana: ["Di", "Diana"],
        monica: ["Moni", "Monica"],
        paola: ["Pao", "Paola"],
        sara: ["Sarita", "Sara"],
        ana: ["Anita", "Ana"],
        maria: ["Mary", "Mari", "Maria"],
        lucia: ["Lu", "Luci", "Lucia"],
        fernanda: ["Fer", "Fernan", "Fernanda"],
        tatiana: ["Tati", "Tatiana"],
        marcela: ["Marce", "Marcela"],
        melissa: ["Meli", "Melissa"],
        catalina: ["Cata", "Catalina"],
        veronica: ["Vero", "Veronica"],
        lina: ["Linita", "Lina"],
        jessica: ["Jess", "Jessi", "Jessica"],
        manuela: ["Manu", "Manuela"],
        stephanie: ["Steph", "Stephanie"],
        vanessa: ["Vane", "Vanessa"],
        lorena: ["Lore", "Lorena"],
        adriana: ["Adri", "Adriana"],
        viviana: ["Vivi", "Viviana"],
    };

    function getSugs(v) {
        const l = v.toLowerCase().trim();
        if (l.length < 2) return [];
        for (const [k, a] of Object.entries(NAMES))
            if (k === l) return a;
        for (const [k, a] of Object.entries(NAMES))
            if (k.startsWith(l) && l.length >= 3) return a;
        const c = l[0].toUpperCase() + l.slice(1);
        return [
            ...new Set(
                [
                    c.slice(0, Math.min(3, c.length - 1)),
                    c.slice(0, Math.min(5, c.length)),
                    c,
                ].filter((x) => x.length > 1),
            ),
        ].slice(0, 3);
    }

    /* ════ STATE ════ */
    const S = {
        nick: "",
        name: "",
        contactType: "",
        email: "",
        age: "",
        sizes: {
            top: "",
            bottom: ""
        },
        styles: [],
        price: "",
        pack: "",
        outfit: {
            top: 0
        },
    };
    let cur = 1;

    /* ════ NAVIGATE ════ */
    function go(n) {
        if (n === cur) return;
        const f = document.getElementById("s" + cur);
        const t = document.getElementById("s" + n);
        if (!t) return;
        f.classList.remove("active");
        f.classList.add("exit");
        setTimeout(() => f.classList.remove("exit"), 480);
        t.classList.add("active");
        t.scrollTop = 0;
        cur = n;
        document.getElementById("progFill").style.width =
            ((cur - 1) / 6) * 100 + "%";
        const nick = S.nick || S.name || "";
        [2, 3, 4, 5].forEach((i) => {
            const e = document.getElementById("tag" + i);
            if (e) e.textContent = nick ? "✦ " + nick : "";
        });
        const tag4 = document.getElementById("tag4new");
        if (tag4) tag4.textContent = nick ? "✦ " + nick : "";
        document.getElementById("backBtn").classList.toggle("show", cur > 1);
        if (n === 7) buildResult();
    }
    window.goBack = () => {
        if (cur > 1) go(cur - 1);
    };

    /* ════ S1 ════ */
    const nameEl = document.getElementById("nameInput");
    const sugRowEl = document.getElementById("sugRow");
    const contactTypeEl = document.getElementById("contactType");
    const contactInputEl = document.getElementById("emailInput");
    contactInputEl.type = "tel";
    contactInputEl.placeholder = "+57 300 000 0000";

    contactTypeEl.addEventListener("change", () => {
        if (contactTypeEl.value === "celular") {
            contactInputEl.type = "tel";
            contactInputEl.placeholder = "+57 300 000 0000";
        } else {
            contactInputEl.type = "email";
            contactInputEl.placeholder = "correo@ejemplo.com";
        }
    });
    const chipsEl = document.getElementById("chips");
    const btnStart = document.getElementById("btnStart");
    sugRowEl.style.display = "none";
    btnStart.style.display = "none";

    nameEl.addEventListener("input", () => {
        const v = nameEl.value.trim();
        if (v.length >= 2) {
            const su = getSugs(v);
            chipsEl.innerHTML = "";
            if (su.length) {
                su.forEach((s) => {
                    const b = document.createElement("button");
                    b.className = "chip";
                    b.textContent = s;
                    b.onclick = () => {
                        chipsEl
                            .querySelectorAll(".chip")
                            .forEach((c) => c.classList.remove("on"));
                        b.classList.add("on");
                        S.nick = s;
                        S.name = v;
                        btnStart.style.display = "block";
                    };
                    chipsEl.appendChild(b);
                });
                sugRowEl.style.display = "block";
            }
        } else {
            sugRowEl.style.display = "none";
            btnStart.style.display = "none";
        }
    });
    nameEl.addEventListener("keydown", (e) => {
        if (e.key === "Enter" && S.nick) go(2);
    });
    btnStart.addEventListener("click", () => {
        if (!S.nick) {
            S.nick = nameEl.value.trim();
            S.name = S.nick;
        }
        S.contactType = document.getElementById("contactType").value.trim();
        S.email = document.getElementById("emailInput").value;
        if (S.nick) go(2);
    });

    /* ════ S2 AGE ════ */
    document.querySelectorAll(".ac").forEach((b) =>
        b.addEventListener("click", () => {
            document
                .querySelectorAll(".ac")
                .forEach((x) => x.classList.remove("on"));
            b.classList.add("on");
            S.age = b.dataset.v;
            document.getElementById("btnNext2").style.display = "block";
        }),
    );

    /* ════ S4 MEJORAS ════ */
    S.mejoras = [];

    document.querySelectorAll("#mejList .pcard").forEach((b) =>
        b.addEventListener("click", () => {
            b.classList.toggle("on");
            const v = b.dataset.v;
            S.mejoras.includes(v) ?
                (S.mejoras = S.mejoras.filter((x) => x !== v)) :
                S.mejoras.push(v);
            document.getElementById("btnNext4new").style.display = S.mejoras
                .length ?
                "block" :
                "none";
        }),
    );

    /* ════ S3 ESTILO ════ */
    const sg = document.getElementById("stGrid");
    STYLES.forEach(({
        k,
        l,
        i
    }) => {
        const b = document.createElement("button");
        b.className = "stcard";
        b.dataset.v = k;
        b.innerHTML =
            `<div class="stimg"><img src="${i}" alt="${l}" loading="lazy"/><div class="stov"></div><div class="stnm">${l}</div></div>`;
        b.addEventListener("click", () => {
            b.classList.toggle("on");
            S.styles.includes(k) ?
                (S.styles = S.styles.filter((x) => x !== k)) :
                S.styles.push(k);
            document.getElementById("btnNext3").style.display = S.styles.length ?
                "block" :
                "none";
        });
        sg.appendChild(b);
    });

    /* ════ S5 PRICE ════ */
    document.querySelectorAll(".pcard").forEach((b) =>
        b.addEventListener("click", () => {
            document
                .querySelectorAll(".pcard")
                .forEach((x) => x.classList.remove("on"));
            b.classList.add("on");
            S.price = b.dataset.v;
            document.getElementById("btnNext5").style.display = "block";
        }),
    );

    /* ════════════════════════════════════════════════════════
       S6 — PROBADOR VIRTUAL
       Sistema proporcional: sin breakpoints, sin resize listeners.
       Las prendas usan % del contenedor .mannequin-wrap.
    ════════════════════════════════════════════════════════ */

    /**
     * Aplica los valores fit{} de una prenda al elemento imagen.
     * Todos los valores son porcentajes del contenedor .mannequin-wrap,
     * por lo que funcionan igual en cualquier tamaño de pantalla.
     */
    // Agrega esto ANTES de setGarment (una sola vez)
    const _timers = {};

    function setGarment(zone, item) {
        const MAP = {
            top: {
                imgId: "gTop",
                dotsId: "dotsTopFloat"
            },
        };
        const {
            imgId,
            dotsId
        } = MAP[zone];
        const img = document.getElementById(imgId);

        // Cancela timeout pendiente si el usuario hizo clic rápido
        if (_timers[zone]) {
            clearTimeout(_timers[zone]);
            _timers[zone] = null;
        }

        // Fade out instantáneo (sin transición)
        img.style.transition = "none";
        img.style.opacity = "0";
        img.style.transform = "scale(0.97)";

        _timers[zone] = setTimeout(() => {
            _timers[zone] = null;

            // Cambiar src y posición mientras es invisible
            img.src = item.url;
            const f = item.fit;
            img.style.top = f.top || "14%";
            img.style.left = f.left || "15%";
            img.style.width = f.width || "70%";
            img.style.height = f.height || "38%";
            img.style.right = "auto";
            img.style.margin = "0";

            // Reactivar transición y hacer fade in en el siguiente frame
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    img.style.transition = "opacity .3s ease, transform .3s ease";
                    img.style.opacity = "1";
                    img.style.transform = "scale(1)";
                });
            });
        }, 80);

        updateDots(dotsId, zone);
        updateLookName();
    }

    function updateDots(containerId, cat) {
        const el = document.getElementById(containerId);
        if (!el) return;
        el.innerHTML = "";
        DATA[cat].forEach((_, i) => {
            const d = document.createElement("span");
            d.className = "zdot" + (i === S.outfit[cat] ? " on" : "");
            el.appendChild(d);
        });
    }

    function change(cat, dir) {
        const len = DATA[cat].length;
        S.outfit[cat] = (S.outfit[cat] + dir + len) % len;
        setGarment(cat, DATA[cat][S.outfit[cat]]);
    }

    function updateLookName() {
        const el = document.getElementById("tryLook");
        if (!el) return;
        const t = DATA.top[S.outfit.top];
        el.innerHTML = `<b>${t.name}</b>`;
    }

    function initTryon() {
        document.getElementById("prevTop").onclick = () => change("top", -1);
        document.getElementById("nextTop").onclick = () => change("top", 1);

        // Cargar la primera prenda
        setGarment("top", DATA.top[0]);
    }

    window.goToResult = async () => {
        const t = DATA.top[S.outfit.top];
        const payload = {
            name: S.name,
            nick: S.nick,
            contactType: S.contactType,
            contactValue: S.email,
            age: S.age,
            styles: S.styles,
            mejoras: S.mejoras || [],
            price: S.price,
            top_name: t.name,
        };

        try {
            await fetch('registros/save_registro.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(payload),
            });
        } catch (e) {
            console.warn('No se pudo guardar el registro:', e);
        }

        go(7);
    };

    /* ════ S7 RESULT ════ */
    function buildResult() {
        const t = DATA.top[S.outfit.top];
        const videoEl = document.getElementById("rVideo");
        if (videoEl && t.video) {
            videoEl.src = t.video;
            videoEl.load();
            videoEl.play();
        }
    }

    // INIT
    initTryon();
    </script>
</body>

</html>