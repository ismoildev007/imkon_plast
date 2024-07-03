<?php

$lang = \Illuminate\Support\Facades\App::getLocale()

?>


<x-layouts.main>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 95%;
            margin: 0 auto;
        }

        .all-border {
            border: 1px solid #f5efe6;
        }

        .config-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }


        .configurator__item-head-desc {
            display: flex;
            gap: 10px;
        }


        .configurator__item-content {
            display: flex;
            justify-content: space-around;
            /* height: 20vh; */
            gap: 10px;
            margin: 20px 20px;
            padding: 20px;
        }

        .window-sections {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            justify-content: space-between;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            height: -webkit-max-content;
            height: -moz-max-content;
            height: max-content;
            grid-gap: 25px;
        }

        .window-sections__item {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            width: 100%;
            grid-gap: 10px;
        }

        .text-tmp {
            display: flex;
            flex-direction: column;
            width: 100%;
            font-size: 18px;
        }

        .window-sections__field-wrap {
            position: relative;
            display: flex;
            flex-direction: column;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
        }

        .window-sections__field {
            display: flex;
            flex-direction: column;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            cursor: pointer;
            width: 60%;
        }

        .window-sections__field.active {
            filter: invert(86%) sepia(20%) saturate(6940%) hue-rotate(20deg) brightness(104%) contrast(102%);
        }

        .window-sections__field img {
            width: auto;
            height: 100%;
            -o-object-fit: contain;
            object-fit: contain;
            filter: brightness(1);
        }

        .window-sections__variations-container.active {
            display: grid !important;
        }


        .window-sections__variations-container {
            z-index: 5;
            position: absolute;
            top: 100px;
            /* left: 100%; */
            display: none;
            grid-template-columns: repeat(3, 100px);
            width: auto;
            padding: 20px;
            grid-gap: 10px;
            background: #fff;
            box-shadow: 0px 3px 6px 0px rgba(0, 0, 0, 0.05), 0px 11px 11px 0px rgba(0, 0, 0, 0.04), 0px 25px 15px 0px rgba(0, 0, 0, 0.03);
        }

        .window-sections__variations-item.active {
            display: grid !important;
            filter: invert(86%) sepia(20%) saturate(6940%) hue-rotate(20deg) brightness(104%) contrast(102%);
        }

        .window-sections__variations-item {
            display: flex;
            flex-direction: column;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            cursor: pointer;
            width: 100%;
        }

        .window-sections__variations-item img {
            width: 100%;
        }


        /* */
        .window-cotnainer {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            /* padding: 20px; */
        }

        /* .window-cotnainer__inner {
            display: flex;
            justify-content: center;
            width: 100%;
        } */

        .window-cotnainer__img {
            position: relative;
            display: flex;
            width: 500px;
        }

        .window-cotnainer__img > img {
            width: 100%;
            height: 100%;
            -o-object-fit: contain;
            object-fit: contain;
        }

        .window-cotnainer__lamination {
            z-index: 1;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            display: flex;
            width: 100%;
            height: 100%;
        }

        .window-cotnainer__lamination img {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
        }


        /*
        .window-cotnainer__height {
            display: flex;
            width: 4px;
            height: 100%;
            margin-left: 80px;
        }

        .noUi-target {
            background: #FAFAFA;
            border-radius: 4px;
            border: 1px solid #D3D3D3;
            box-shadow: inset 0 1px 1px #F0F0F0, 0 3px 6px -5px #BBB;
        }

        .noUi-base, .noUi-connects {
            width: 100%;
            height: 100%;
            position: relative;
            z-index: 1;
        }

        .noUi-connects {
            border-radius: 3px;
        }

        .noUi-connects {
            overflow: hidden;
            z-index: 0;
        }

        .window-cotnainer__height .noUi-connect {
            background: #85766f;
        }

        .noUi-connect {
            background: #3FB8AF;
        }

        .noUi-connect, .noUi-origin {
            will-change: transform;
            position: absolute;
            z-index: 1;
            top: 0;
            right: 0;
            height: 100%;
            width: 100%;
            -ms-transform-origin: 0 0;
            -webkit-transform-origin: 0 0;
            -webkit-transform-style: preserve-3d;
            transform-origin: 0 0;
            transform-style: flat;
        }

        .noUi-vertical .noUi-origin {
            top: -100%;
            width: 0;
        }

        .window-cotnainer__height .noUi-handle {
            height: 18px;
            width: 18px;
            left: -10px;
            border-radius: 9px;
            background: #85766f;
            box-shadow: none;
            cursor: pointer;
        }

        .noUi-touch-area {
            height: 100%;
            width: 100%;
        }

        .window-cotnainer__height .noUi-tooltip {
            width: 80px;
            right: -90px;
            background: transparent;
            border: none;
        }

        .noUi-vertical .noUi-tooltip {
            transform: translate(0, -50%);
            top: 50%;
            right: 120%;
        }

        .noUi-tooltip {
            display: block;
            position: absolute;
            border: 1px solid #D9D9D9;
            border-radius: 3px;
            background: #fff;
            color: #000;
            padding: 5px;
            text-align: center;
            white-space: nowrap;
        }
         */


        /* Functional styling;
        * These styles are required for noUiSlider to function.
        * You don't need to change these rules to apply your design.
        */
        .noUi-target,
        .noUi-target * {
            -webkit-touch-callout: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            -webkit-user-select: none;
            -ms-touch-action: none;
            touch-action: none;
            -ms-user-select: none;
            -moz-user-select: none;
            user-select: none;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .noUi-target {
            position: relative;
        }

        .noUi-base,
        .noUi-connects {
            width: 100%;
            height: 100%;
            position: relative;
            z-index: 1;
        }

        /* Wrapper for all connect elements.
         */
        .noUi-connects {
            overflow: hidden;
            z-index: 0;
        }

        .noUi-connect,
        .noUi-origin {
            will-change: transform;
            position: absolute;
            z-index: 1;
            top: 0;
            right: 0;
            height: 100%;
            width: 100%;
            -ms-transform-origin: 0 0;
            -webkit-transform-origin: 0 0;
            -webkit-transform-style: preserve-3d;
            transform-origin: 0 0;
            transform-style: flat;
        }

        /* Offset direction
         */
        .noUi-txt-dir-rtl.noUi-horizontal .noUi-origin {
            left: 0;
            right: auto;
        }

        /* Give origins 0 height/width so they don't interfere with clicking the
         * connect elements.
         */
        .noUi-vertical .noUi-origin {
            top: -100%;
            width: 0;
        }

        .noUi-horizontal .noUi-origin {
            height: 0;
        }

        .noUi-handle {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            position: absolute;
        }

        .noUi-touch-area {
            height: 100%;
            width: 100%;
        }

        .noUi-state-tap .noUi-connect,
        .noUi-state-tap .noUi-origin {
            -webkit-transition: transform 0.3s;
            transition: transform 0.3s;
        }

        .noUi-state-drag * {
            cursor: inherit !important;
        }

        /* Slider size and handle placement;
         */
        .noUi-horizontal {
            height: 18px;
        }

        .noUi-horizontal .noUi-handle {
            width: 34px;
            height: 28px;
            right: -17px;
            top: -6px;
        }

        .noUi-vertical {
            width: 5px;
        }

        .noUi-vertical .noUi-handle {
            width: 28px;
            height: 30px;
            right: -13px;
            bottom: -17px;
            border-radius: 50%;
        }

        .noUi-txt-dir-rtl.noUi-horizontal .noUi-handle {
            left: -17px;
            right: auto;
        }

        /* Styling;
         * Giving the connect element a border radius causes issues with using transform: scale
         */
        .noUi-target {
            background: #FAFAFA;
            border-radius: 4px;
            border: 1px solid #D3D3D3;
            box-shadow: inset 0 1px 1px #F0F0F0, 0 3px 6px -5px #BBB;
        }

        .noUi-connects {
            border-radius: 3px;
        }

        .noUi-connect {
            background: #3FB8AF;
        }

        /* Handles and cursors;
         */
        .noUi-draggable {
            cursor: ew-resize;
        }

        .noUi-vertical .noUi-draggable {
            cursor: ns-resize;
        }

        .noUi-handle {
            border: 1px solid #D9D9D9;
            border-radius: 3px;
            background: #FFF;
            cursor: default;
            box-shadow: inset 0 0 1px #FFF, inset 0 1px 7px #EBEBEB, 0 3px 6px -3px #BBB;
        }

        .noUi-active {
            box-shadow: inset 0 0 1px #FFF, inset 0 1px 7px #DDD, 0 3px 6px -3px #BBB;
        }

        /* Handle stripes;
         */
        .noUi-handle:before,
        .noUi-handle:after {
            content: "";
            display: block;
            position: absolute;
            height: 14px;
            width: 1px;
            background: #E8E7E6;
            left: 14px;
            top: 6px;
        }

        .noUi-handle:after {
            left: 17px;
        }

        .noUi-vertical .noUi-handle:before,
        .noUi-vertical .noUi-handle:after {
            width: 14px;
            height: 1px;
            left: 6px;
            top: 14px;
        }

        .noUi-vertical .noUi-handle:after {
            top: 17px;
        }

        /* Disabled state;
         */
        [disabled] .noUi-connect {
            background: #B8B8B8;
        }

        [disabled].noUi-target,
        [disabled].noUi-handle,
        [disabled] .noUi-handle {
            cursor: not-allowed;
        }

        /* Base;
         *
         */
        .noUi-pips,
        .noUi-pips * {
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .noUi-pips {
            position: absolute;
            color: #999;
        }

        /* Values;
         *
         */
        .noUi-value {
            position: absolute;
            white-space: nowrap;
            text-align: center;
        }

        .noUi-value-sub {
            color: #ccc;
            font-size: 10px;
        }

        /* Markings;
         *
         */
        .noUi-marker {
            position: absolute;
            background: #CCC;
        }

        .noUi-marker-sub {
            background: #AAA;
        }

        .noUi-marker-large {
            background: #AAA;
        }

        /* Horizontal layout;
         *
         */
        .noUi-pips-horizontal {
            padding: 10px 0;
            height: 80px;
            top: 100%;
            left: 0;
            width: 100%;
        }

        .noUi-value-horizontal {
            -webkit-transform: translate(-50%, 50%);
            transform: translate(-50%, 50%);
        }

        .noUi-rtl .noUi-value-horizontal {
            -webkit-transform: translate(50%, 50%);
            transform: translate(50%, 50%);
        }

        .noUi-marker-horizontal.noUi-marker {
            margin-left: -1px;
            width: 2px;
            height: 5px;
        }

        .noUi-marker-horizontal.noUi-marker-sub {
            height: 10px;
        }

        .noUi-marker-horizontal.noUi-marker-large {
            height: 15px;
        }

        /* Vertical layout;
         *
         */
        .noUi-pips-vertical {
            padding: 0 10px;
            height: 100%;
            top: 0;
            left: 100%;
        }

        .noUi-value-vertical {
            -webkit-transform: translate(0, -50%);
            transform: translate(0, -50%);
            padding-left: 25px;
        }

        .noUi-rtl .noUi-value-vertical {
            -webkit-transform: translate(0, 50%);
            transform: translate(0, 50%);
        }

        .noUi-marker-vertical.noUi-marker {
            width: 5px;
            height: 2px;
            margin-top: -1px;
        }

        .noUi-marker-vertical.noUi-marker-sub {
            width: 10px;
        }

        .noUi-marker-vertical.noUi-marker-large {
            width: 15px;
        }

        .noUi-tooltip {
            display: block;
            position: absolute;
            border: 1px solid #D9D9D9;
            border-radius: 3px;
            background: #fff;
            color: #000;
            padding: 5px;
            text-align: center;
            white-space: nowrap;
        }

        .noUi-horizontal .noUi-tooltip {
            -webkit-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
            left: 50%;
            bottom: 120%;
        }

        .noUi-vertical .noUi-tooltip {
            -webkit-transform: translate(0, -50%);
            transform: translate(0, -50%);
            top: 50%;
            right: 120%;
        }

        .noUi-horizontal .noUi-origin > .noUi-tooltip {
            -webkit-transform: translate(50%, 0);
            transform: translate(50%, 0);
            left: auto;
            bottom: 10px;
        }

        .noUi-vertical .noUi-origin > .noUi-tooltip {
            -webkit-transform: translate(0, -18px);
            transform: translate(0, -18px);
            top: auto;
            right: 28px;
        }


        .window-cotnainer__width {
            display: flex;
            width: 100%;
            margin-top: 40px;
            margin-right: 2px;
            height: 4px;
        }

        .noUi-target {
            background: #FAFAFA;
            border-radius: 4px;
            border: 1px solid #D3D3D3;
            box-shadow: inset 0 1px 1px #F0F0F0, 0 3px 6px -5px #BBB;
        }

        .noUi-target {
            position: relative;
        }

        .noUi-target, .noUi-target * {
            -webkit-touch-callout: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            -webkit-user-select: none;
            touch-action: none;
            -ms-user-select: none;
            -moz-user-select: none;
            user-select: none;
            box-sizing: border-box;
        }

        .noUi-connects {
            border-radius: 3px;
        }

        .noUi-connects {
            overflow: hidden;
            z-index: 0;
        }

        .noUi-base, .noUi-connects {
            width: 100%;
            height: 100%;
            position: relative;
            z-index: 1;
        }

        .window-cotnainer__width .noUi-connect {
            background: #85766f;
        }

        .noUi-connect {
            background: #3FB8AF;
        }

        .noUi-connect, .noUi-origin {
            will-change: transform;
            position: absolute;
            z-index: 1;
            top: 0;
            right: 0;
            height: 100%;
            width: 100%;
            -ms-transform-origin: 0 0;
            -webkit-transform-origin: 0 0;
            -webkit-transform-style: preserve-3d;
            transform-origin: 0 0;
            transform-style: flat;
        }

        .noUi-horizontal .noUi-origin {
            height: 0;
        }

        .noUi-connect, .noUi-origin {
            will-change: transform;
            position: absolute;
            z-index: 1;
            top: 0;
            right: 0;
            height: 100%;
            width: 100%;
            -ms-transform-origin: 0 0;
            -webkit-transform-origin: 0 0;
            -webkit-transform-style: preserve-3d;
            transform-origin: 0 0;
            transform-style: flat;
        }

        .window-cotnainer__width .noUi-handle {
            position: relative;
            height: 18px;
            width: 18px;
            top: -8px;
            right: -9px;
            border-radius: 9px;
            background: #85766f;
            box-shadow: none;
            cursor: pointer;
        }

        .noUi-horizontal .noUi-handle {
            width: 34px;
            height: 28px;
            right: -17px;
            top: -6px;
        }

        .noUi-handle {
            border: 1px solid #D9D9D9;
            border-radius: 3px;
            background: #FFF;
            cursor: default;
            box-shadow: inset 0 0 1px #FFF, inset 0 1px 7px #EBEBEB, 0 3px 6px -3px #BBB;
        }

        .noUi-handle {
            border: 1px solid #D9D9D9;
            border-radius: 3px;
            background: #FFF;
            cursor: default;
            box-shadow: inset 0 0 1px #FFF, inset 0 1px 7px #EBEBEB, 0 3px 6px -3px #BBB;
        }

        .noUi-touch-area {
            height: 100%;
            width: 100%;
        }

        .window-cotnainer__width .noUi-handle {
            height: 18px;
            width: 18px;
            top: -8px;
            right: -9px;
            border-radius: 9px;
            background: #85766f;
            box-shadow: none;
            cursor: pointer;
        }

        .noUi-handle {
            border: 1px solid #D9D9D9;
            border-radius: 3px;
            background: #FFF;
            cursor: default;
            box-shadow: inset 0 0 1px #FFF, inset 0 1px 7px #EBEBEB, 0 3px 6px -3px #BBB;
        }

        .window-cotnainer__width .noUi-tooltip {
            width: 80px;
            background: transparent;
            border: none;
        }

        .noUi-horizontal .noUi-tooltip {
            transform: translate(-50%, 0);
            left: 50%;
        }

        .noUi-tooltip {
            display: block;
            position: absolute;
            border: 1px solid #D9D9D9;
            border-radius: 3px;
            background: #fff;
            color: #000;
            padding: 5px;
            text-align: center;
            white-space: nowrap;
        }


        /* */

        .configurator__item-content-aside {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            width: 100%;
            max-width: 300px;
            height: -webkit-max-content;
            height: -moz-max-content;
            height: max-content;
            grid-gap: 40px;
        }

        .text-tmp {
            display: flex;
            flex-direction: column;
            width: 100%;
            color: black;
        }

        .aside-types {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            width: 100%;
            grid-gap: 10px;
        }

        .aside-types__btns {
            width: 100%;
            grid-gap: 10px;
        }

        .btn.black.active {
            background: #000 !important;
            border-color: #000;
            color: black;
            padding: 10px;
        }

        .btn.black {
            background: #000;
            border-color: #000;
            color: #000;
            width: 100%;
        }

        .btn.transparent {
            background: transparent !important;
            color: inherit;
            border-color: inherit;
            width: 100%;
        }

        .btn {
            z-index: 1;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            height: -webkit-max-content;
            height: -moz-max-content;
            height: max-content;
            min-height: 48px;
            padding: 0.4rem 1.4em;
            border: 1px solid transparent;
            border-radius: 5px;
            will-change: transform;
            color: #fff;
            font-family: var(--font-m);
            font-weight: var(--weight-m-500);
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            transition: 0.3s background, 0.3s border-color, 0.3s color;
            transition-timing-function: ease;
        }

        .configurator__item-aside-inner {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            width: 100%;
            grid-gap: 40px;
        }

        .aside-serias, .aside-glazing, .aside-lamination, .aside-accessories, .aside-options, .aside-components {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            /* align-items: center;
            justify-content: center; */
            width: 100%;
            grid-gap: 10px;
        }

        .input {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 100%;
            height: -webkit-max-content;
            height: -moz-max-content;
            height: max-content;
            transition: 0.3s all ease;
        }

        .select-custom {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            height: 50px;
            padding: 0 20px;
            outline: none;
            border: 1px solid rgba(0, 0, 0, 0.1);
            background: transparent;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: black;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s all ease;
            border-radius: 3px;
        }

        .select-custom select {
            display: none;
            opacity: 0;
            max-width: 0;
            max-height: 0;
            visibility: hidden;
        }

        .select-custom__field {
            display: flex;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .select-custom__list.active {
            pointer-events: painted;
            visibility: visible;
            opacity: 1;
            transform: translateY(0);
        }

        .select-custom__list {
            z-index: 10;
            position: absolute;
            top: calc(100% + 10px);
            left: 0;
            display: flex;
            flex-direction: column;
            width: 100%;
            min-height: -webkit-max-content;
            min-height: -moz-max-content;
            min-height: max-content;
            max-height: 200px;
            padding: 14px 10px;
            background: #fff;
            border: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 8px 10px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transform: translateY(-20px);
            pointer-events: none;
            visibility: hidden;
            transition: 0.3s all ease;
        }

        .select-custom__list ul {
            display: flex;
            flex-direction: column;
            width: 100%;
            padding-right: 10px;
            overflow-y: auto;
            -ms-scroll-chaining: none;
            overscroll-behavior: contain;
            scrollbar-color: #000 transparent;
            scrollbar-width: thin;
            transition: 0.3s all ease;
        }

        .select-custom__list ul li.active {
            color: #fff;
            background: #000;
        }

        .select-custom__list ul li {
            display: flex;
            width: 100%;
            padding: 0.4rem 1em;
            color: #000;
            cursor: pointer;
        }

        .select-custom::after {
            content: "";
            position: absolute;
            top: 50%;
            transform: translateY(-50%) rotate(90deg);
            right: 20px;
            width: 14px;
            height: 14px;
            /* background-image: url(data:image/svg+xml, <svg viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M2.62268e-07 18.5L7.5 11L1.57361e-06 3.5L1.5 0.499999L12 11L1.5 21.5L2.62268e-07 18.5Z" fill="%23000000"></path> </svg>); */
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
            pointer-events: none;
            transition: 0.3s all ease;
        }

        .options-cotainer {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            width: 100%;
            grid-gap: 40px;
        }


        .aside-serias, .aside-glazing, .aside-lamination, .aside-accessories, .aside-options, .aside-components {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            /* align-items: center;
            justify-content: center; */
            width: 100%;
            grid-gap: 10px;
        }

        .aside-options .height {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }


        .aside-accessories__btns, .aside-lamination__btns {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
            gap: 6px;
        }

        .aside-lamination .text-tmp {
            text-align: center;
        }

        .aside-accessories__btn.active, .aside-lamination__btn.active {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
        }

        .aside-accessories__btn, .aside-lamination__btn {
            display: flex;
            width: 40px;
            height: 40px;
            border: 1px solid #e3e6e8;
            border-radius: 50%;
            transition: 0.3s all ease;
        }

        .aside-accessories__btn img, .aside-lamination__btn img {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            border-radius: 50%;
        }

        button {
            background: transparent;
            border: none;
            outline: none;
            padding: 0;
            cursor: pointer;
        }


        .checkbox__label {
            display: flex;
            align-items: center;
            font-size: 20px;
        }


        .input {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 100%;
            height: -webkit-max-content;
            height: -moz-max-content;
            height: max-content;
            transition: 0.3s all ease;
        }

        .input input, .input textarea {
            display: flex;
            align-items: center;
            width: 100%;
            height: 50px;
            padding: 15px 20px;
            outline: none;
            border: 1px solid rgba(0, 0, 0, 0.1);
            background: transparent;
            font-weight: var(--weight-m-500);
            color: #000;
            font-size: 16px;
            transition: 0.3s all ease;
        }

        .f {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
        }

        .slider-bottom {
            width: 100%;
        }

        .slider {
            -webkit-appearance: none;
            appearance: none;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, #85766f, #ccc); /* Updated gradient colors */

            outline: none;
            opacity: 0.7;
            transition: opacity .2s;
            border-radius: 4px;
        }

        .slider:hover {
            opacity: 1;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 15px;
            height: 15px;
            background: #5c5c5c;
            border-radius: 40px;
            cursor: pointer;
        }

        .slider::-moz-range-thumb {
            width: 15px;
            height: 15px;
            background: #5c5c5c;
            cursor: pointer;
        }

        #valueDisplay {
            font-size: 16px;
            margin-top: 9px;
            float: right;
        }


        @media (max-width: 1350px) {
            .configurator__item-content {
                display: flex;
                flex-direction: column;
                align-items: center;
                border: 1px solid #f5efe6;
                justify-content: space-between;
                /* height: 20vh; */
                margin: 20px 20px;
                padding: 20px;
            }

            .window-sections {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                justify-content: space-between;
                width: -webkit-max-content;
                width: -moz-max-content;
                width: 100%;
                height: -webkit-max-content;
                height: -moz-max-content;
                height: max-content;
                grid-gap: 25px;
                margin-bottom: 30px;
            }

            .configurator__item-content-aside {
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                width: 100% !important;
                max-width: 100%;
                height: -webkit-max-content;
                height: -moz-max-content;
                height: max-content;
                grid-gap: 40px;
                margin-left: 0px;
            }
        }

        @media (max-width: 800px) {
            .configurator__item-content {
                display: flex;
                flex-direction: column;
                align-items: center;
                border: 1px solid #f5efe6;
                justify-content: space-between;
                /* height: 20vh; */
                margin: 20px 20px;
                padding: 20px;
            }
        }


    </style>
    <main style="margin-top: 200px; background-color: white;">
        <section class="px-7">
                <div class="configurator__item-content">
                        <div class="configurator__item-content-aside">
                            <div class="configurator__item-aside-inner">
                                <div class="options-cotainer">
                                    <div class="aside-options">
                                        <div class="text-tmp title-18">
                                            <h6 class="aside-options-title_js">Oyna Turi</h6>
                                        </div>
                                        <div class="input">
                                            <div class="select-custom select-serias-6462_js">
                                                <select>
                                                    <option value="2">Bir stvorkali</option>
                                                    <option value="3">Ikki stvorkali</option>
                                                    <option value="4"></option>
                                                </select>
                                                <div class="select-custom__field">Standart</div>
                                                <div class="select-custom__list">
                                                    <ul>
                                                        <li class="select-custom__item active" data-option-value="2"
                                                            data-option-var="null" style="">Bir stvorkali
                                                        </li>
                                                        <li class="select-custom__item" data-option-value="3"
                                                            data-option-var="null" style="">Ikki stvorkali
                                                        </li>
                                                        <li class="select-custom__item" data-option-value="4"
                                                            data-option-var="null" style="">Uch stvorkali
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="aside-serias">
                                    <div class="text-tmp title-18">
                                        <h6 class="aside-serias-title_js">Серия профиля</h6>
                                    </div>
                                    <div class="input">
                                        <div class="select-custom select-serias-9699_js select-serias_js">
                                            <select>
                                                <option value="14">Trio 60</option>
                                                <option value="15">Quattro 60</option>
                                                <option value="13">Engelberg 70</option>
                                                <option value="12">Engelberg 80</option>
                                            </select>
                                            <div class="select-custom__field">
                                                Trio 60
                                            </div>
                                            <div class="select-custom__list">
                                                <ul>
                                                    <li class="select-custom__item active" data-option-value="14"
                                                        data-option-var="null" style="">Trio 60
                                                    </li>
                                                    <li class="select-custom__item" data-option-value="15"
                                                        data-option-var="null" style="">Quattro 60
                                                    </li>
                                                    <li class="select-custom__item" data-option-value="13"
                                                        data-option-var="null" style="">Engelberg 70
                                                    </li>
                                                    <li class="select-custom__item" data-option-value="12"
                                                        data-option-var="null" style="">Engelberg 80
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="aside-options">
                                <div class="text-tmp title-18"><h6 class="aside-quanty-title_js">O'lchamlar</h6>
                                </div>
                                <div class="input">
                                    <div style="margin-top: 9px;">
                                        <label for="boyi" style="color: black">Bo'yi: </label>
                                        <input class="quanty-input_js" id="boyi" type="number" min="1">
                                    </div>
                                    <div style="margin-top: 10px;">
                                        <label for="uzunligi" style="color: black">Uzunligi: </label>
                                        <input class="quanty-input_js" id="uzunligi" type="number" min="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="f">
                            <div class="window-cotnainer">
                                <div class="window-cotnainer__inner" style="position: relative;">
                                    <div class="window-cotnainer__img">
                                        <img src="/front/rom.svg" style="z-index: 9;">
                                        <div class="window-cotnainer__lamination">
                                            <img src="/front/c-mokko.jpg">
                                        </div>
                                    </div>
                                </div>
                                <h5 style="margin-bottom: 20px; color: black;">Trio 60</h5>
                                <div class="aside-lamination">
                                    <!-- <div class="text-tmp title-18">
                                        <h5 class="aside-lamination-title_js">Ламинация</h5>
                                    </div> -->
                                    <div class="aside-lamination__btns">
                                        <button class="aside-lamination__btn active" id="6" data-name="Mokko emani">
                                            <img src="/front/c-mokko.jpg">
                                        </button>
                                        <button class="aside-lamination__btn" id="1" data-name="Oq">
                                            <img src="/front/c-oq.jpg">
                                        </button>
                                        <button class="aside-lamination__btn" id="18" data-name="Kulrang SW 306 G">
                                            <img src="/front/c-kulrang.jpg">
                                        </button>
                                        <button class="aside-lamination__btn" id="9" data-name="Oltin eman">
                                            <img src="/front/c-oltin.jpg">
                                        </button>
                                        <button class="aside-lamination__btn" id="12" data-name="Solod emani">
                                            <img src="/front/c-solod.jpg">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
        </section>
        <section style="display: none;">
            <div class="container">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('order.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="full_name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="color" class="form-label">Color</label>
                        <input type="text" class="form-control" id="color" name="color" required>
                    </div>
                    <div class="mb-3">
                        <label for="size_height" class="form-label">Size Height</label>
                        <input type="text" class="form-control" id="size_height" name="size_height" required>
                    </div>
                    <div class="mb-3">
                        <label for="size_weight" class="form-label">Size Weight</label>
                        <input type="text" class="form-control" id="size_weight" name="size_weight" required>
                    </div>
                    <div class="mb-3">
                        <label for="shirt" class="form-label">Soni</label>
                        <input type="number" class="form-control" id="shirt" name="shirt" required>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </section>

    </main>

    <script>
                document.addEventListener('DOMContentLoaded', function () {

                    const fields = document.querySelectorAll('.window-sections__field');

                    fields.forEach(field => {
                        field.addEventListener('click', () => {
                            const activeField = document.querySelector('.window-sections__field.active');
                            if (activeField) {
                                activeField.classList.remove('active');
                            }

                            field.classList.add('active');
                        });
                    });

                    function handleVariationsClick() {
                        document.querySelectorAll('.window-sections__field-wrap').forEach(function (fieldWrap) {
                            fieldWrap.addEventListener('click', function () {
                                const variationsContainer = fieldWrap.querySelector('.window-sections__variations-container');
                                variationsContainer.classList.toggle('active');

                                document.querySelectorAll('.window-sections__variations-container').forEach(function (container) {
                                    if (container !== variationsContainer) {
                                        container.classList.remove('active');
                                    }
                                });
                            });
                        });
                    }

                    function handleLaminationClick() {
                        const laminationButtons = document.querySelectorAll('.aside-lamination__btn');
                        const laminationImage = document.querySelector('.window-cotnainer__lamination img');

                        laminationButtons.forEach(function (button) {
                            button.addEventListener('click', function () {
                                laminationButtons.forEach(function (btn) {
                                    btn.classList.remove('active');
                                });
                                button.classList.add('active');
                                const imgSrc = button.querySelector('img').getAttribute('src');
                                laminationImage.setAttribute('src', imgSrc); // Update the src attribute of the lamination image
                            });
                        });
                    }       

                    function handleVariationsItemClick() {
                        const variationsItems = document.querySelectorAll('.window-sections__variations-item');

                        variationsItems.forEach(function (item) {
                            item.addEventListener('click', function () {
                                variationsItems.forEach(function (item) {
                                    item.classList.remove('active');
                                });
                                item.classList.add('active');
                                const dataUrl = item.getAttribute('data-url');
                                const imageElement = document.querySelector('.window-container__img img');
                                imageElement.setAttribute('src', dataUrl);
                            });
                        });
                    }

                    function handleSelectCustomClick() {
                        document.querySelectorAll('.select-custom').forEach(function (selectCustom) {
                            const selectList = selectCustom.querySelector('.select-custom__list');
                            const selectField = selectCustom.querySelector('.select-custom__field');

                            selectField.addEventListener('click', function () {
                                selectList.classList.toggle('active');
                            });

                            selectCustom.querySelectorAll('.select-custom__item').forEach(function (item) {
                                item.addEventListener('click', function () {
                                    selectCustom.querySelectorAll('.select-custom__item').forEach(function (item) {
                                        item.classList.remove('active');
                                    });
                                    item.classList.add('active');
                                    selectField.textContent = item.textContent.trim();
                                    selectList.classList.remove('active');
                                });
                            });

                            document.addEventListener('click', function (event) {
                                if (!selectCustom.contains(event.target)) {
                                    selectList.classList.remove('active');
                                }
                            });
                        });
                    }

                    handleVariationsClick();
                    handleLaminationClick();
                    handleVariationsItemClick();
                    handleSelectCustomClick();
                });
            </script>
</x-layouts.main>