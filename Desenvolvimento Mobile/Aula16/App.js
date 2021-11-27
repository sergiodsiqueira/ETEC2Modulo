import React, { useState } from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { 
  Alert, 
  StyleSheet, 
  Text, 
  TextInput, 
  TouchableOpacity, 
  Image, 
  View, 
  ImageBackground } from 'react-native';

const Stack = createNativeStackNavigator();

function Sobre() {
  alert('CONVERSOR DE VALORES', 'Desenvolvido por Sérgio S. Silva Powered by ETEC')
}

function App() {
  return (
    <NavigationContainer>
      <Stack.Navigator initialRouterName='Home'>
        <Stack.Screen name='Home' component={HomeScreen} options={{ headerShown: false }} />
        <Stack.Screen name='Dollar' component={DollarScreen} options={{ headerShown: false }}/>
        <Stack.Screen name='Euro' component={EuroScreen} options={{ headerShown: false }}/>
        <Stack.Screen name='Yuan' component={YuanScreen} options={{ headerShown: false }}/>
      </Stack.Navigator>
    </NavigationContainer>
  );
}

/* Tela Home */
function HomeScreen({ navigation }) {
  const [valor, setValor] = useState(0);
  
  return (
    
    <View style={styleA.container}>

      <ImageBackground 
        style={styleA.background}
        source={{uri: 'https://w0.peakpx.com/wallpaper/884/304/HD-wallpaper-abstract-gradient-dark-shapes-minimalism.jpg'}}>

      <Image
        style={styleA.imagem}
        source={require('./exchange.png')}
      />

      <Text style={styleA.titulo}>CURRENCY EXCHANGE</Text>
      <Text style={styleA.subtitulo}>DOLLAR | EURO | YUAN </Text>

      <TextInput
        style={styleA.edtValor}
        placeholder='DIGITE O VALOR A SER CONVERTIDO'
        keyboardType='numeric'
        onChangeText={setValor}
      />

      <>
        <TouchableOpacity
          style={styleA.btnConverter}
          onPress={() => navigation.navigate('Dollar', {valor})}>
          <Text style={styleA.btnConverterTexto}>
            CONVERTER U$ (DOLLAR) EM R$
          </Text>
        </TouchableOpacity>

        <TouchableOpacity
          style={styleA.btnConverter}
          onPress={() => navigation.navigate('Euro', {valor})}>
          <Text style={styleA.btnConverterTexto}>
            CONVERTER € (EURO) EM R$
          </Text>
        </TouchableOpacity>

        <TouchableOpacity
          style={styleA.btnConverter}
          onPress={() => navigation.navigate('Yuan', {valor})}>
          <Text style={styleA.btnConverterTexto}>
            CONVERTER Y$ (YUAN) EM R$
          </Text>
        </TouchableOpacity>

        <TouchableOpacity
          style={styleA.btnSobre}
          onPress={() => Sobre()}>
          <Text style={styleA.btnSobreTexto}>
            SOBRE
          </Text>
        </TouchableOpacity>
      </>
      </ImageBackground>
    </View>
  )
}

/* Tela Dollar */
function DollarScreen({ navigation, route }) {
  
  const { valor } = route.params;
  const valorConvertido = valor * 5.6;

  return (
    <View style={styleB.containerConversao}>

      <View style={{width: '105%', height: '60%'}}>       
        <ImageBackground
          resizeMode =  'cover'
          style={styleB.imgCurrency}
          source={{
            uri: 'https://media.istockphoto.com/photos/background-of-american-one-dollar-bills-picture-id1132190569?k=20&m=1132190569&s=612x612&w=0&h=5YlqkDy8joXfMizSwUj9zl4EP9sd_RW94bna8y5db48='
          }}
        >        
        </ImageBackground>  
      </View>

      <View style={styleB.viewInterna}>
         
        <Text style={styleB.txtValorEstrangeiro}>{(parseFloat(valor)).toLocaleString('en-US',{style: 'currency', currency: 'USD'})}</Text>
        
        <Text style={{marginTop: 40}}> Valor em R$: </Text>
        <Text style={styleB.txtValorBR}>{(valorConvertido).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}</Text>
        
        <TouchableOpacity
          style={styleB.btnVoltar}
          onPress={() => navigation.navigate('Home')}>
          <Text style={styleB.txtVoltar}>
            VOLTAR
          </Text>
        </TouchableOpacity>
      </View>

    </View>
  )
}

/* Tela Euro */
function EuroScreen({ navigation, route }) {
  
  const { valor } = route.params;
  const valorConvertido = valor * 6.35;

  return (
    <View style={styleB.containerConversao}>

      <View style={{width: '105%', height: '60%'}}>       
        <ImageBackground
          resizeMode =  'cover'
          style={styleB.imgCurrency}
          source={{
            uri: 'https://www.thelocal.de/wp-content/uploads/2020/04/b30718b18861797119e75cc22d0d231e915236ecec71cc759b8a8327415b757f.jpg'
          }}
        >        
        </ImageBackground>  
      </View>

      <View style={styleB.viewInterna}>
         
        <Text style={styleB.txtValorEstrangeiro}>{(parseFloat(valor)).toLocaleString('fr',{style: 'currency', currency: 'EUR'})}</Text>
        
        <Text style={{marginTop: 40}}> Valor em R$: </Text>
        <Text style={styleB.txtValorBR}>{(valorConvertido).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}</Text>
        
        <TouchableOpacity
          style={styleB.btnVoltar}
          onPress={() => navigation.navigate('Home')}>
          <Text style={styleB.txtVoltar}>
            VOLTAR
          </Text>
        </TouchableOpacity>
      </View>

    </View>
  )
}

/* Tela Yaun */
function YuanScreen({ navigation, route }) {
  
    const { valor } = route.params;
    const valorConvertido = valor * 0.88;
  
    return (
      <View style={styleB.containerConversao}>
  
        <View style={{width: '105%', height: '60%'}}>       
          <ImageBackground
            resizeMode =  'cover'
            style={styleB.imgCurrency}
            source={{
              uri: 'https://bsmedia.business-standard.com/media-handler.php?mediaPath=https://bsmedia.business-standard.com/_media/bs/img/article/2021-02/22/full/1613988302-7794.jpg&width=1200'
            }}
          >        
          </ImageBackground>  
        </View>
  
        <View style={styleB.viewInterna}>
           
          <Text style={styleB.txtValorEstrangeiro}>{(parseFloat(valor)).toLocaleString('zn-CH',{style: 'currency', currency: 'CNY'})}</Text>
          
          <Text style={{marginTop: 40}}> Valor em R$: </Text>
          <Text style={styleB.txtValorBR}>{(valorConvertido).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}</Text>
          
          <TouchableOpacity
            style={styleB.btnVoltar}
            onPress={() => navigation.navigate('Home')}>
            <Text style={styleB.txtVoltar}>
              VOLTAR
            </Text>
          </TouchableOpacity>
        </View>
  
      </View>
    )
  }

export default App;

const styleA = StyleSheet.create({
  container: {
    flex: 1,
  },
  background: {
    flex: 1,
    alignItems: 'center',
    justifyContent: 'flex-start',
  },
  containerConversao: {
    flex: 1,
  },
  imagem: {
    width: 180,
    height: 180,
  },
  titulo: {
    fontSize: 25,
    color: 'white',
  },
  subtitulo: {
    fontSize: 15,
    color: 'white',
  },
  edtValor: {
    marginTop: '10%',
    borderRadius: 5,
    width: 300,
    height: 50,
    backgroundColor: 'white',
    padding: 3,
    fontSize: 17.8,
    shadowColor: 'black',
    elevation: 2
  },
  btnConverter: {
    marginTop: '8%',
    borderRadius: 8,
    borderWidth: 1,
    width: 300,
    height: 50,
    justifyContent: 'center',
    backgroundColor: 'black'
  },
  btnConverterTexto: {
    fontSize: 16,
    fontWeight: '400',
    textAlign: 'center',
    textShadowColor: 'black',
    color: 'white',
  },
  viewInterna: {
    backgroundColor: '#f5f5f5',
    width: '100%',
    height: '80%',
    borderRadius: 30,
    alignItems: 'center',
    marginTop: -50,
  },
  txtValor: {
    fontSize: 30,
    marginTop: '5%',
  },
  txtValorConvertido: {
    fontSize: 40,
  },
  btnSobre: {
    marginTop: '10%',
    justifyContent: 'center',
  },
  btnSobreTexto: {
    fontSize: 15,
    textAlign: 'center',
    fontWeight: '500',
    textShadowColor: 'black'
  },
  imgUS: {
    flex: 1,
  },
  btnVoltar:{
    marginTop: '20%',
    borderRadius: 8,
    width: 200,
    height: 40,
    backgroundColor: 'black',
  },
  txtVoltar: {
    marginTop: 10,
    textAlign: 'center',
    color: 'white',
  }
});

const styleB = StyleSheet.create({
  containerConversao: {
    flex: 1,
  },
  imgCurrency: {
    flex: 1,
    justifyContent: 'center',
  },
  viewInterna: {
    backgroundColor: '#f5f5f5',
    width: '100%',
    height: '80%',
    borderRadius: 30,
    alignItems: 'center',
    marginTop: -60,
  },
  txtValorEstrangeiro: {
    marginTop: '2%',
    fontSize: 30,
    textAlign: 'center',
    color: 'black',
    opacity: 0.5,
    shadowColor: 'black',
    elevation: 5
  },
  txtValorBR: {
    fontSize: 50,
  },
  btnVoltar:{
    marginTop: '15%',
    borderRadius: 8,
    width: 200,
    height: 40,
    backgroundColor: 'black',
  },
  txtVoltar: {
    marginTop: 10,
    textAlign: 'center',
    color: 'white',
  }
});

