import React, { useState } from 'react';
import { Alert, StyleSheet, Text, TextInput, TouchableOpacity, Image, View } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';

const Stack = createNativeStackNavigator();

function Sobre() {
  Alert.alert('CONVERSOR DE VALORES', 'Desenvolvido por Sérgio S. Silva Powered by ETEC')
}

function App() {
  return (
    <NavigationContainer>
      <Stack.Navigator initialRouterName='Home'>
        <Stack.Screen name='Home' component={HomeScreen} options={{ headerShown: false }} />
        <Stack.Screen name='Dollar' component={DollarScreen} />
        <Stack.Screen name='Euro' component={EuroScreen} />
        <Stack.Screen name='Yuan' component={YuanScreen} />
      </Stack.Navigator>
    </NavigationContainer>
  );
}

function HomeScreen({ navigation }) {
  return (
    <View style={styles.container}>

      <Image
        style={styles.imagem}
        source={{
          uri: 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1e/Circle-icons-calculator.svg/1200px-Circle-icons-calculator.svg.png'
        }}
      />

      <Text style={styles.titulo}>CONVERSOR DE MOEDAS</Text>
      <Text style={styles.subtitulo}>DOLLAR | EURO | YUAN </Text>

      <TextInput
        style={styles.edtValor}
        placeholder='DIGITE O VALOR'
        keyboardType='numeric'
      />

      <>
        <TouchableOpacity
          style={styles.btnConverter}
          onPress={() => navigation.navigate('Dollar', {})}>
          <Text style={styles.btnConverterTexto}>
            CONVERTER EM U$ (DOLLAR)
          </Text>
        </TouchableOpacity>

        <TouchableOpacity
          style={styles.btnConverter}
          onPress={() => navigation.navigate('Euro')}>
          <Text style={styles.btnConverterTexto}>
            CONVERTER EM E$ (EURO)
          </Text>
        </TouchableOpacity>

        <TouchableOpacity
          style={styles.btnConverter}
          onPress={() => navigation.navigate('Yuan')}>
          <Text style={styles.btnConverterTexto}>
            CONVERTER EM Y$ (YUAN)
          </Text>
        </TouchableOpacity>

        <TouchableOpacity
          style={styles.btnSobre}
          onPress={() => Sobre()}>
          <Text style={styles.btnSobreTexto}>
            SOBRE
          </Text>
        </TouchableOpacity>
      </>
    </View>
  )
}

function DollarScreen({ navigation }) {
  return (
    <View style={styles.container}>
      <>
        <Text style={styles.txtValorBR}>R$ 3,00</Text>
      </>

      <View style={styles.viewInterna}>
        <Text style={styles.txtValorConvertido}>R$ 15,00</Text>
      </View>

      <>
        <TouchableOpacity
          style={styles.btnVoltar}
          onPress={() => navigation.navigate('Home')}>
          <Text style={{ color: 'black', marginBottom: 100 }}>
            VOLTAR
          </Text>
        </TouchableOpacity>
      </>
    </View>
  )
}

function EuroScreen({ navigation }) {
  return (
    <View style={styles.container}>
      <Text>Euro</Text>
    </View>
  )
}

function YuanScreen({ navigation }) {
  return (
    <View style={styles.container}>
      <Text>Yuan</Text>
    </View>
  )
}

export default App;

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#1fbfaa',
    alignItems: 'center',
    justifyContent: 'flex-start',
  },
  titulo: {
    marginTop: '5%',
    fontSize: 30,
    color: '#f5f5f5',
  },
  subtitulo: {
    fontSize: 15,
    color: '#f5f5f5',
  },
  edtValor: {
    marginTop: '15%',
    borderRadius: 5,
    width: 300,
    height: 60,
    backgroundColor: '#f5f5f5',
    padding: 3,
    fontSize: 35,
  },
  btnConverter: {
    marginTop: '10%',
    borderRadius: 8,
    borderWidth: 1,
    borderColor: '#f5f5f5',
    width: 300,
    height: 50,
    justifyContent: 'center',
  },
  btnConverterTexto: {
    color: '#f5f5f5',
    fontSize: 20,
    textAlign: 'center',
  },
  viewInterna: {
    backgroundColor: '#f5f5f5',
    width: '100%',
    height: '80%',
    borderRadius: 30,
    alignItems: 'center',
    marginTop: 100,
  },
  txtValorBR: {
    fontSize: 30,
    marginTop: 40,
    color: '#f5f5f5',
  },
  txtValorConvertido: {
    fontSize: 40,
    marginTop: '2%',
  },
  btnSobre: {
    marginTop: '30%',
    justifyContent: 'center',
  },
  btnSobreTexto: {
    color: '#f5f5f5',
    fontSize: 15,
    textAlign: 'center',
  },
  imagem: {
    marginTop: '10r%',
    width: 50,
    height: 50,
  }
});
