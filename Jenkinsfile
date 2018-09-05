#!/usr/bin/env groovy

node {
  def app
  try {
    stage('checkout') {
      checkout scm
    }

    stage('docker-build') {
      app = docker.build("johndavedecano/laragym")
    }

    stage('docker-push') {
      docker.withRegistry('https://registry.hub.docker.com', 'dockerhub') {
        app.push("${env.BUILD_NUMBER}")
        app.push("latest")
      }
    }

    stage('docker-compose') {
      sh '/usr/local/bin/docker-compose -f docker-compose.testing.yml down'
      sh '/usr/local/bin/docker-compose -f docker-compose.testing.yml up -d'
      sh '/usr/local/bin/docker-compose -f docker-compose.testing.yml down'
    }
  } catch(error) {
      throw error
  } finally {

  }
}