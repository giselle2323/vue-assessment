<template>
  <div class="nav-bar">
    <header class="nav__header">
      <section class="logo__section">
        <a href="/"
          ><img
            src="../assets/images/logo.svg"
            alt="logo"
            height="60px"
            width="192px"
        /></a>
      </section>
      <section class="nav-menu__section">
        <div class="nav-link-container">
          <a href="/">Calendar</a>
          <a href="/">Statistic</a>
          <a href="/" class="active-link">Employee</a>
          <a href="/">Client</a>
          <a href="/">Equipment</a>
        </div>
      </section>
      <section class="nav-notifications__section">
        <div class="nav-notifications-inner-container">
          <div class="notification-container">
            <button class="notification__btn">
              <img
                src="../assets/images/notifications.png"
                alt="notifications"
                width="45px"
                height="45px"
              />
            </button>
          </div>
          <div class="message__btn-container">
            <div class="message-dot"></div>
            <button class="message__btn">
              <img
                src="../assets/images/message.png"
                alt="messages"
                width="45px"
                height="45px"
              />
            </button>
          </div>
          <div class="nav-image-container">
            <img src="../assets/images/profile-head.png" alt="profile-image" srcset="" width="45px" height="45px"/>
          </div>
        </div>
      </section>
    </header>
  </div>
</template>