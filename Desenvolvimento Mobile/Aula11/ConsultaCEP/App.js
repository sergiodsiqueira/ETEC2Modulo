import { StatusBar } from 'expo-status-bar';
import React from 'react';
import { StyleSheet, Text, View } from 'react-native';
import { useFonts, Inter_400Regular, Inter_600SemiBold } from '@expo-google-fonts/inter';
import AppLoading from 'expo-app-loading';
import { Principal } from './src/screens/principal';

export default function App() {
  
  const [fontes] = useFonts({  
    Inter_400Regular,
    Inter_600SemiBold
  });

  if(!fontes)
  return(
    <AppLoading />
  );  
  
  return (
    <Principal/>
  );
};