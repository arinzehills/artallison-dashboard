class Profile extends HTMLElement {
  constructor() {
    super();
    this.innerHTML = `<div class="profile">
                <div class="info">
                    <p>Hey, <b>Thelma</b></p>
                    <small class="text-muted">Admin</small>
                </div>
                <div class="profile-photo">
                    <img src="./images/profile.png" alt="ds" />
                </div>
                </div>
 `;
  }
}
window.customElements.define("profile-component", Profile);
