import React, { useState } from 'react';
import { View, TextInput, Button, Alert, StyleSheet } from 'react-native';
import Box from '@material-ui/core/Box';

export default function CustomAlert() {
  const [inputText, setInputText] = useState('');
  const inputTextUpperCase = inputText.toUpperCase();
  const handleButtonPress = () => {
    Alert.alert('Alerta:', inputTextUpperCase);
  };

  return (
    <View style={styles.container}>

        <View style={styles.inputContainer}>
        <TextInput
          style={styles.input}
          onChangeText={(text) => setInputText(text)}
          placeholder="Ingrese Alerta"
        />
      </View>
        <View style={styles.buttonContainer}>
        <Button
          title="Alerta"
          onPress={handleButtonPress}
          style={styles.button}
        />
      </View>
    </View>

  );
}

const styles = StyleSheet.create({
  container: {
    padding: 20,
  },
  inputContainer: {
    marginBottom: 20,
  },
  input: {
    borderWidth: 2,
    borderColor: '#ccc',
    padding: 8,
    borderRadius: 10,
  },
  buttonContainer: {
    borderWidth: 2,
    borderColor: '#ccc',
    borderRadius: 10,
  },
});
