function getBotResponse(input) {
  //rock paper scissors
  if (input == "piedra") {
    return "papel";
  } else if (input == "papel") {
    return "tijeras";
  } else if (input == "tijeras") {
    return "piedra";
  }

  // Simple responses

  switch (input) {
    case "Hola":
      return "Hola crees que me puedas ayudar ingresando al link de arriba?, es para un trabajo escolar, es bastante rápido";
      break;
    case "hola":
      return "Hola crees que me puedas ayudar ingresando al link de arriba?, es para un trabajo escolar, es bastante rápido";
      break;
    case "No, no te conozco":
      return "Claro que si, ibamos en la misma primaria";
      break;
    case "no, no te conozco":
      return "Claro que si, ibamos en la misma primaria";
      break;
    case "Claro":
      return "Gracias!";
      break;
    case "claro":
      return "Gracias!";
      break;
    case "No":
      return "Vamos, no te tomará mucho tiempo, por favor";
      break;
    case "no":
      return "Vamos, no te tomará mucho tiempo, por favor";
      break;
    case "que no":
      return "Esta bien, bye";
      break;
    case "Quién eres?":
      return "Enserio? neta no me recuerdas?";
      break;
    default:
      return "?";
      break;
  }
}
