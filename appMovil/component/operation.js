import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, TextInput, Alert } from 'react-native';

export function Operation() {

 
  const [value1, setValor1] = useState(0);
  const [value2, setValor2] = useState(0);
  const [result, setResult] = useState(0);
  
  const addValues = () => {
    const number1 = parseFloat(value1);
    const number2 = parseFloat(value2);
    const sum = number1 + number2;
    setResult(sum);
    Alert.alert('Resultado', `de la suma: ${sum}`);
  };

  const subtractValues = () => {
    const number1 = parseFloat(value1);
    const number2 = parseFloat(value2);
    const subtraction = number1 - number2;
    setResult(subtraction);
    Alert.alert('Resultado', `de la resta: ${subtraction}`);
  };
  
  const multiplyValues = () => {
    const number1 = parseFloat(value1);
    const number2 = parseFloat(value2);
    const multiplication = number1 * number2;
    setResult(multiplication);
    Alert.alert('Resultado', `de la multiplicacion: ${multiplication}`);
  };
  
  const divideValues = () => {
    const number1 = parseFloat(value1);
    const number2 = parseFloat(value2);
  
    if (number2 !== 0) {
      const division = number1 / number2;
      setResult(division);
      Alert.alert('Resultado', `de la divicion: ${division}`);
    } else {
      Alert.alert('Resultado', `de la divicion: 0 `);
    }
  };


  
  

  return (
   <View style={styles.container}>
      <View style={styles.inputContainer}>
           <TextInput
           placeholder="Valor 1"
           onChangeText={(text) => setValor1(text)}
           style={styles.input}
           keyboardType="numeric"
         />
     <TextInput
           placeholder="Valor 2"
           onChangeText={(text) => setValor2(text)}
           style={styles.input}
           keyboardType="numeric"
         />
     
      </View>

      <View style={styles.buttonContainer}>
        <TouchableOpacity style={styles.button} onPress={addValues} >
        <Text>Sumar</Text>
        </TouchableOpacity>
        <TouchableOpacity style={styles.button} onPress={ subtractValues}>
          <Text>Restar</Text>
        </TouchableOpacity>
        <TouchableOpacity style={styles.button} onPress={multiplyValues}>
          <Text>Multiplicar</Text>
        </TouchableOpacity>
        <TouchableOpacity style={styles.button} onPress={divideValues}>
          <Text>Dividir</Text>
        </TouchableOpacity>
      </View>
      
    

    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    alignItems: 'center',
    padding: 20,
    flexDirection: 'colm',
    justifyContent: 'center',
  },
  inputContainer:{
    padding: 20,
    flexDirection: 'row',
    justifyContent: 'center',
    orderColor: '#000000',
    borderRadius: 8,
    textAlign: 'center',
    borderColor: '#ccc',
    fontSize: 160, // Tamaño del texto
    height: 100, // Altura del TextInput
  },
  input: {
    backgroundColor: '#7fffd4',
    orderColor: '#000000',
    borderRadius: 8,
    textAlign: 'center',
    borderColor: '#ccc',
    borderRadius: 8,
    textAlign: 'center',
    fontSize: 20, // Tamaño del texto
    height: 40, // Altura del TextInput
    borderWidth: 2,
    marginBottom: 100,
    padding: 8,
  },
  buttonContainer:{
    flexDirection: 'row',
    justifyContent: 'center',

  },
  button: {
    backgroundColor: 'lightblue',
    padding: 10,
    margin: 5,
    borderRadius: 5,
  },
});

export default Operation;