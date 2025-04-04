class contactForm extends HTMLElement {
  static observedAttributes = ["max-width", "color", "border-rad", "text", "action", "method"];

  color;
  maxW;
  borderRad;
  text;
  action;
  method;

  constructor() {
    super();
  }

  setAtributes() {
    if (this.hasAttribute("color")) {
      this.color = this.getAttribute("color");
    } else {
      this.color = "white";
    }

    if (this.hasAttribute("max-width")) {
      this.maxW = this.getAttribute("max-width");
    } else {
      this.maxW = "100%";
    }

    if (this.hasAttribute("border-rad")) {
      this.borderRad = this.getAttribute("border-rad");
    } else {
      this.borderRad = "";
    }

    if (this.hasAttribute("text")) {
      this.text = this.getAttribute("text");
    } else {
      this.text = "black";
    }

    if (this.hasAttribute("action")) {
      this.action = this.getAttribute("action");
    } else {
      this.action = "#";
    }

    if (this.hasAttribute("method")) {
      this.method = this.getAttribute("method");
    } else {
      this.method = "post";
    }

  }

  connectedCallback() {
    this.setAtributes();
    // Create a shadow root
    const shadow = this.attachShadow({ mode: "open" });

    const section = document.createElement("section");
    section.setAttribute("style", `display: flex; justify-content: center;`);

    const flexHolder = document.createElement("div");

    flexHolder.setAttribute("style", `background-color: ${this.color}; width: ${this.maxW}; border-radius: ${this.borderRad};`);

    const formContainer = document.createElement("div");
    formContainer.setAttribute("style", `margin-left: auto; margin-right: auto; max-width: ${this.maxW}; padding-left: 1rem; padding-right: 1rem; padding-top: 2rem; padding-bottom: 2rem;`);

    const title = document.createElement("h2");
    title.setAttribute("style", "margin-bottom: 1rem; text-align: center; font-size: 2.25rem; line-height: 2.5rem; font-weight: 800; letter-spacing: -0.025em; color: rgb(17,24,39);");
    title.textContent = "Stuur ons een bericht";

    const subTitle = document.createElement("p");
    subTitle.setAttribute("style", "margin-bottom: 2rem; text-align: center; font-weight: 300; color: rgb(107,114,128);");
    subTitle.textContent = "somethin something text";

    const form = document.createElement("form");
    form.setAttribute("style", "margin-top: calc(2rem * calc(1 - 0)); margin-bottom: calc(2rem * 0);");
    form.setAttribute("action", `${this.action}`);
    form.setAttribute("method", `${this.method}`)

    const emailHolder = document.createElement("div");

    const emailLabel = document.createElement("label");
    emailLabel.setAttribute("for", "email");
    emailLabel.setAttribute("style", "margin-bottom: 0.5rem; display: block; font-size: 0.875rem; line-height: 1.25rem; font-weight: 500; color: rgb(17,24,39);");
    emailLabel.textContent = "email";

    const emailInput = document.createElement("input");
    emailInput.setAttribute("type", "email");
    emailInput.setAttribute("id", "email");
    emailInput.setAttribute("style", "display: block; width: 100%; border-radius: 0.5rem; border-width: 1px; border-color: rgb(209,213,219); background-color: rgb(249,250,251); padding: 0.75rem; font-size: 0.875rem; line-height: 1.25rem; color: rgb(17,24,39); box-shadow: 0 0 #0000, 0 0 #0000, 0 1px 2px 0 rgb(0,0,0,0.05);");
    emailInput.setAttribute("placeholder", "email@email.com");
    emailInput.setAttribute("required", "");
    emailInput.setAttribute("name", "email");

    const subjectHolder = document.createElement("div");

    const subjectLabel = document.createElement("label");
    subjectLabel.setAttribute("for", "subject");
    subjectLabel.setAttribute("style", "margin-bottom: 0.5rem; display: block; font-size: 0.875rem; line-height: 1.25rem; font-weight: 500; color: rgb(17,24,39);");
    subjectLabel.textContent = "Onderwerp";

    const subjectInput = document.createElement("input");
    subjectInput.setAttribute("type", "text");
    subjectInput.setAttribute("id", "subject");
    subjectInput.setAttribute("style", "display: block; width: 100%; border-radius: 0.5rem; border-width: 1px; border-color: rgb(209,213,219); background-color: rgb(249,250,251); padding: 0.75rem; font-size: 0.875rem; line-height: 1.25rem; color: rgb(17,24,39); box-shadow: 0 0 #0000, 0 0 #0000, 0 1px 2px 0 rgb(0,0,0,0.05);");
    subjectInput.setAttribute("placeholder", "Het onderwerp");
    subjectInput.setAttribute("required", "");
    subjectInput.setAttribute("name", "subject");

    const messageHolder = document.createElement("div");
    messageHolder.setAttribute("class", "sm:col-span-2");

    const messageLabel = document.createElement("label");
    messageLabel.setAttribute("for", "message");
    messageLabel.setAttribute("style", "margin-bottom: 0.5rem; display: block; font-size: 0.875rem; line-height: 1.25rem; font-weight: 500; color: rgb(17,24,39);");
    messageLabel.textContent = "Je bericht";

    const textArea = document.createElement("textarea");
    textArea.setAttribute("id", "message");
    textArea.setAttribute("rows", "6");
    textArea.setAttribute("style", "display: block; width: 100%; border-radius: 0.5rem; border-width: 1px; border-color: rgb(209,213,219); background-color: rgb(249,250,251); padding: 0.625rem; font-size: 0.875rem; line-height: 1.25rem; color: rgb(17,24,39); box-shadow: 0 0 #0000, 0 0 #0000, 0 1px 2px 0 rgb(0,0,0,0.05);");
    textArea.setAttribute("placeholder", "Schrijf hier uw bericht");
    textArea.setAttribute("name", "message");

    const submitButton = document.createElement("input");
    submitButton.setAttribute("type", "submit");
    submitButton.setAttribute("style", `border-radius: 0.5rem; padding-left: 1.25rem; padding-right: 1.25rem; padding-top: 0.75rem; padding-bottom: 0.75rem; text-align: center; font-size: 0.875rem; line-height: 1.25rem; font-weight: 500; color: rgb(255,255,255); color: ${this.text};`);
    submitButton.setAttribute("required", "");
    submitButton.textContent = "verstuur";

    shadow.append(section);

    section.append(flexHolder);

    flexHolder.append(formContainer);

    formContainer.append(title);
    formContainer.append(subTitle);
    formContainer.append(form);

    form.append(emailHolder);
    emailHolder.append(emailLabel);
    emailHolder.append(emailInput);

    form.append(subjectHolder);
    subjectHolder.append(subjectLabel);
    subjectHolder.append(subjectInput);

    form.append(messageHolder);
    messageHolder.append(messageLabel);
    messageHolder.append(textArea);

    form.append(submitButton);
  }

  disconnectedCallback() {
    console.log("Custom element removed from page.");
  }

  adoptedCallback() {
    console.log("Custom element moved to new page.");
  }

  attributeChangedCallback(name, oldValue, newValue) {
    console.log(`Attribute ${name} has changed.`);
  }

}

customElements.define("contact-form", contactForm);